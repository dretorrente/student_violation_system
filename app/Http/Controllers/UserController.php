<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //elementary
    public function home_elem() {
        return view('elementary.admin.home');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'username' => 'required|exists:users,username',
            'password' => "required"
        ]);

        if(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>3]))
        {
            return redirect()->route('elem.home');

        }
        elseif(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>2])) {
            return redirect()->route('junior.home');
        }
        elseif(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>1])){
            return redirect()->route('senior.home');
        }
        else{
            return redirect()->back()->withInput($request->all)->with(['message' => 'Invalid password']);
        }
    }

    /**
     * elementary view for settings
     * @return [type] [description]
     */
    public function setting_elem() {

        $user = Auth::user();
        return view('elementary.admin.settings', ['user' => $user]);
    }

    /**
     * elementary credential for password
     * @param  Array  $data [description]
     * @return [type]       [description]
     */
    public function elem_credential_rules(Array $data) {
        $messages = [
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'password'              => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ], $messages);

        return $validator;
    }

    /**
     * Update elementary settings
     * @return [type] [description]
     */
    public function update_elem(Request $request) {
        if (Auth::Check()) {
            $request_data = $request->All();
            $this->validate($request, [
                'email' => 'email',
                'password' => 'required|confirmed',
            ]);
            $user_id            = Auth::User()->id;
            $obj_user           = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->email    = $request_data['email'];
            $obj_user->username = $request_data['username'];
            $obj_user->save();
            Session::flash('message','Your account has been successfully update!');
            Session::flash('alert-class', 'alert-info'); 
            return redirect('/elementary/settings/');
        }
    }
    /**
     * elementary users management list
     * @return void
     */
    public function elem_management() {
        $users = DB::table('users')->where('group_id', '3')->get();
        return view('elementary.users.index',['users' => $users]);
    }
    /**
     * Elementary management add staff
     */
    public function elem_management_add(Request $request) {
        if ($request->isMethod('post')) {
            $user           = new User();
            $password       = md5(uniqid(rand(), true));
            $hashPassword   = Hash::make($password);
            $user->email    = $request['email'];
            $user->username = $request['username'];
            $user->role     = $request['role'];
            $user->group_id = 3;
            $user->password = $hashPassword;

            $request_data = $request->all();
            if ($user->save()) {
                Mail::send('elementary.users.email', ['password' => $password], function ($m) use ($request_data) {
                    $m->from('lihuza@duck2.club', 'Your Temporary Password');

                    $m->to($request_data['email'], $request_data['username'])->subject('Your Temporary Password');
                });
                return redirect('/elementary/users/');
            }
        }
    }

    /**
     * elementary users management update
     * @return [type] [description]
     */
    public function elem_management_update(request $request) {
        $user = User::find($request['id']);
        if ($user) {
            $user->email = $request['email'];
            $user->username = $request['username'];
            $user->role = $request['role'];
            $user->save();
            Session::flash('message','Your users has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/users/');
        }
    }

    /**
     * 
     */
    public function elem_delete_management($id) {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            Session::flash('message','Your user has been deleted!');
            Session::flash('alert-class', 'alert-info'); 
            return redirect('/elementary/users/');
        } else {
            return redirect('/elementary/users/');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('signin');
    }


    // junior
    public function home_junior() {
        return view('junior.admin.home');
    }

    public function home_senior() {
        return view('senior.admin.home');
    }

}
