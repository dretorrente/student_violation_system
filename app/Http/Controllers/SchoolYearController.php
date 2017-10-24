<?php

namespace App\Http\Controllers;
use App\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SchoolYearController extends Controller
{

    public function schoolyear_elem(){
        return view('elementary.schoolyear.index');
    }
    public function add_schoolyear_elem(Request $request){
        $schoolyear = new SchoolYear();
        if ($request->isMethod('post')) {

        }
    }
}
