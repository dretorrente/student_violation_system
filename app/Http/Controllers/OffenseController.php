<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Offense;
use App\Student;
use App\SchoolYear;
use App\Section;
use DB;
use App\Violation;
use Illuminate\Support\Facades\Session;
use Config;

class OffenseController extends Controller
{
    public function offense_elem(){
        $students = DB::table('students')
            ->join('school_years', 'students.sy_id', '=', 'school_years.id')
            ->select('students.*', 'school_years.school_year')
            ->where('students.group_id', '=', 3)
            ->get();
        $violations = Violation::all();
        return view('elementary.stud_offense.index',['violations' => $violations, 'students' => $students]);
    }

    public function offense_records_elem(){
        $offenses= DB::table('offenses')
            ->join('students', 'offenses.student_id', '=', 'students.student_id')
            ->join('violations', 'offenses.violation_id', '=', 'violations.id')
            ->join('school_years','students.sy_id', '=', 'school_years.id')
            ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year')
            ->where('students.group_id', '=', 3)
            ->get();
        return view('elementary.offense_records.index',['offenses' => $offenses]);
    }


    public function add_offense_elem(Request $request){
        if ($request->isMethod('post')) {
            $offense = new Offense();
            unset($request['datatable_length']);
            unset($request['violation']);
            $offense->fill($request->all());
            if($offense->save()){
                Session::flash('message','Your student offense has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/elementary/offense/');
            }
        }
    }
}
