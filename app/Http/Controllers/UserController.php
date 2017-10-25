<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function home_elem() {
        return view('elementary.admin.home');
    }

    public function login_elem(Request $request) {

        $this->validate($request, [
            'username' => 'required|exists:users,username,group_id,3',
            'password' => "required"
        ]);

        if(Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'group_id'=>3]))
        {
            return redirect()->route('elem.home');

        }else{
            return redirect()->back()->withInput($request->all)->with(['message' => 'Invalid password']);

        }
    }

    public function logout_elem() {
        Auth::logout();
        return redirect()->route('elem.signin');
    }


}
