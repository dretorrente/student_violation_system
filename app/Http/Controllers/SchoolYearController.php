<?php

namespace App\Http\Controllers;
use App\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class SchoolYearController extends Controller
{

    public function schoolyear_elem(){
        $school_years = SchoolYear::all();
        return view('elementary.schoolyear.index',['school_years' => $school_years]);
    }
    public function add_schoolyear_elem(Request $request){
        if ($request->isMethod('post')) {
            $schoolyear = new SchoolYear();
            $schoolyear->school_year = $request['school_year'];
            if($schoolyear->save()){
                Session::flash('message','Your school year has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/elementary/schoolyear/');
            }

        }
    }


    public function delete_sy_elem($id) {

        $sy = SchoolYear::find($id);
        if ($sy) {
            $sy->delete();
            Session::flash('message','Your school year has been deleted!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/schoolyear/');
        } else {
            return redirect('/elementary/schoolyear/');
        }
    }


    public function update_sy_elem(Request $request) {
        $update = SchoolYear::find($request['id']);
        if ($update) {
            $update->school_year = $request['school_year'];
            $update->save();
            Session::flash('message','Your school year has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/schoolyear/');
        } else {
            return redirect('/elementary/schoolyear/');
        }
    }
}
