<?php

namespace App\Http\Controllers;
use App\Student;
use App\SchoolYear;
use App\Section;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    public function student_elem(){
        $sections = Section::all();
        $school_years = SchoolYear::all();
        $students = DB::table('students')
                    ->join('school_years', 'students.sy_id', '=', 'school_years.id')
                    ->select('students.*', 'school_years.school_year')
                    ->where('students.group_id', '=', 3)
                    ->get();
        return view('elementary.student.index',['sections' => $sections,'school_years' => $school_years,'students'=>$students]);
    }
    public function add_student_elem(Request $request){
        if ($request->isMethod('post')) {
            $students = new Student();
            $students->fill($request->all());
            $students->group_id = Auth::user()['group_id'];
            if($students->save()){
                Session::flash('message','Your student has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/elementary/students/');
            }

        }
    }


    public function update_student_elem(Request $request) {
        $update = Student::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/students/');
        } else {
            return redirect('/elementary/students/');
        }
    }

    // Senior high school

    /**
     * senior high dashboard
     */
    public function student_senior(){
        $sections = Section::all();
        $school_years = SchoolYear::all();
        $students = DB::table('students')
                    ->join('school_years', 'students.sy_id', '=', 'school_years.id')
                    ->select('students.*', 'school_years.school_year')
                    ->where('students.group_id', '=', 1)
                    ->get();
        return view('senior.student.index',['sections' => $sections],['school_years' => $school_years,'students'=>$students]);
    }

    /**
     * Senior high add students
     */
    public function add_student_senior(Request $request){
        if ($request->isMethod('post')) {
            $students = new Student();
            $students->fill($request->all());
            $students->group_id = Auth::user()['group_id'];
            if($students->save()){
                Session::flash('message','Your student has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/senior/students/');
            }

        }
    }

    /**
     * Senior high update students
     */
    public function update_student_senior(Request $request) {
        $update = Student::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/senior/students/');
        } else {
            return redirect('/senior/students/');
        }
    }

    // Junior high school

    /**
     * Junior high dashboard
     */
    public function student_junior(){
        $sections = Section::all();
        $school_years = SchoolYear::all();
        $students = DB::table('students')
                    ->join('school_years', 'students.sy_id', '=', 'school_years.id')
                    ->select('students.*', 'school_years.school_year')
                    ->where('students.group_id', '=', 2)
                    ->get();
        return view('junior.student.index',['sections' => $sections],['school_years' => $school_years,'students'=>$students]);
    }

    /**
     * Junior high add students
     */
    public function add_student_junior(Request $request){
        if ($request->isMethod('post')) {
            $students = new Student();
            $students->fill($request->all());
            $students->group_id = Auth::user()['group_id'];
            if($students->save()){
                Session::flash('message','Your student has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/junior/students/');
            }

        }
    }

    /**
     * Junior high update students
     */
    public function update_student_junior(Request $request) {
        $update = Student::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/junior/students/');
        } else {
            return redirect('/junior/students/');
        }
    }

    public function total_attempt_elem(Request $request) {
        if ($request->isMethod('post')) {
            $students = DB::table("offenses")
                ->join('students', 'students.student_id', '=', 'offenses.student_id')
                ->select(DB::raw("COUNT(offenses.student_id) count"))
                ->groupBy("offenses.student_id")
                ->where('students.student_id', '=', $request->stud_id)
                ->get();
            return response()->json(array('msg'=> $students), 200);
        }
    }
}
