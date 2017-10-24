<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{

    public function student_elem(){
        return view('elementary.student.index');
    }
    public function add_student_elem(Request $request){
        $student = new Student();
        if ($request->isMethod('post')) {
            echo '<pre>';
            var_dump($request->all());
        }


    }


}
