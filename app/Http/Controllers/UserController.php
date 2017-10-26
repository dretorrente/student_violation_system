<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        }else{
            return redirect()->back()->withInput($request->all)->with(['message' => 'Invalid password']);

        }


        if(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>2]))
        {
            return redirect()->route('junior.home');

        }else{
            return redirect()->back()->withInput($request->all)->with(['message' => 'Invalid password']);

        }

        if(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>1]))
        {
            return redirect()->route('senior.home');

        }else{
            return redirect()->back()->withInput($request->all)->with(['message' => 'Invalid password']);

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

}
