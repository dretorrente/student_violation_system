<?php

namespace App\Http\Controllers;

use App\Violation;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ViolationController extends Controller
{
    public function violation_elem() {
    	$violation = DB::table('violations')->simplePaginate(10);
        return view('elementary.violations.index',['violations' => $violation]);
    }

    public function add_violation_elem(Request $request) {
    	 if ($request->isMethod('post')) {
            $violation = new Violation();
            $violation->fill($request->all());
            if ($violation->save()) {
            	Session::flash('message','Your violation has been succesfully added!');
    			Session::flash('alert-class', 'alert-info'); 
            } else {
            	Session::flash('message','Your violation has been failed to saved!');
    			Session::flash('alert-class', 'alert-danger'); 
            }
            return redirect('/elementary/violation/');
        }
    }

    public function delete_violation_elem($id) {
    	$violation = Violation::find($id);
    	if ($violation) {
    		$violation->delete();
    		Session::flash('message','Your violation has been deleted!');
    		Session::flash('alert-class', 'alert-info'); 
    		return redirect('/elementary/violation/');
    	} else {
    		return redirect('/elementary/violation/');
    	}
    }

    public function update_violation_elem(Request $request) {
    	$update = Violation::find($request['id']);
    	if ($update) {
    		$update->fill($request->all());
    		$update->save();
    		Session::flash('message','Your violation has been succesfully update!');
    		Session::flash('alert-class', 'alert-info'); 
    		return redirect('/elementary/violation/');
    	} else {
    		return redirect('/elementary/violation/');
    	}
    }
}
