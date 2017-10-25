<?php

namespace App\Http\Controllers;
use App\Student;
use App\SchoolYear;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function student_elem(){
        $sections = Section::all();
        $school_years = SchoolYear::all();
        return view('elementary.student.index',['sections' => $sections],['school_years' => $school_years]);
    }
    public function add_student_elem(Request $request){
        if ($request->isMethod('post')) {
            $students = new Student();
            $students->fill($request->all());
            var_dump($request->all());
        }
    }
}
