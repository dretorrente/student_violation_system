<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
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
