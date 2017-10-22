<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{

    public function students_elem(){
        return view('elementary.student.index');
    }
    public function add_students_elem(){

    }


}
