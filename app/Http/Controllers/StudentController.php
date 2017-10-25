<?php

namespace App\Http\Controllers;
use App\Student;
use App\SchoolYear;
use App\Section;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function student_elem(){
        $sections = Section::all();
        $school_years = SchoolYear::all();
        $students = DB::table('students')
                    ->join('school_years', 'students.sy_id', '=', 'school_years.id')
                    ->select('students.*', 'school_years.school_year')
                    ->get();
        return view('elementary.student.index',['sections' => $sections],['school_years' => $school_years,'students'=>$students]);
    }
    public function add_student_elem(Request $request){
        if ($request->isMethod('post')) {
            $students = new Student();
            $students->fill($request->all());
            $students->group_id = Auth::user()['group_id'];
            if($students->save()){
                return redirect('/elementary/students/');
            }

        }
    }
}
