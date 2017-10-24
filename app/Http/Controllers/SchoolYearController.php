<?php

namespace App\Http\Controllers;
use App\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $schoolyear->save();
            return redirect('/elementary/schoolyear/');
        }
    }
}
