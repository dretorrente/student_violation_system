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
use Carbon\Carbon;

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
        $sections = Section::all();
        $school_years = SchoolYear::all();
        $offenses= DB::table('offenses')
            ->join('students', 'offenses.student_id', '=', 'students.student_id')
            ->join('violations', 'offenses.violation_id', '=', 'violations.id')
            ->join('school_years','students.sy_id', '=', 'school_years.id')
            ->join('sections','students.section_id', '=', 'sections.id')
            ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year,sections.section,sections.grade')
            ->where('students.group_id', '=', 3)
            ->get();
        return view('elementary.offense_records.index',['sections' => $sections,'school_years' => $school_years,'offenses' => $offenses]);
    }


    public function add_offense_elem(Request $request){
        if ($request->isMethod('post')) {
            $data = [];
            foreach($request->persons_involve as $person_involve) {
                unset($request['datatable_length']);
                unset($request['violation']);
                $data = [
                    'student_id'      => $person_involve,
                    'date_commit'     => $request->date_commit,
                    'violation_id'    => $request->violation_id,
                    'student_offense' => $request->student_offense,
                    'description'     => $request->description,
                    'sanction'       => $request->sanction,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
                Offense::insert($data);
            }
            $students = DB::table("offenses")
                ->join('students', 'students.student_id', '=', 'offenses.student_id')
                ->select(DB::raw("COUNT(offenses.student_id) count,students.first_name, students.last_name"))
                ->groupBy("offenses.student_id")
                ->havingRaw("COUNT(offenses.student_id) = 3")
                ->where('students.group_id', '=', 3)
                ->get();
            if(!empty($students)) {
                foreach($students as $student) {
                    $stud = new Student();
                    $stud->status = 'unread';
                    $stud->save();
                }
            }

            Session::flash('message','Your student offense has been succesfully added!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/offense/');
        }
    }

    //Senior high school

    /**
     * Senior high offenses
     */
    public function offense_senior(){
        $students = DB::table('students')
            ->join('school_years', 'students.sy_id', '=', 'school_years.id')
            ->select('students.*', 'school_years.school_year')
            ->where('students.group_id', '=', 1)
            ->get();
        $violations = Violation::all();
        return view('senior.stud_offense.index',[
            'violations' => $violations, 
            'students' => $students
        ]);
    }

    /**
     * Senior high offense record
     */
    public function offense_records_senior(){
        $offenses= DB::table('offenses')
            ->join('students', 'offenses.student_id', '=', 'students.student_id')
            ->join('violations', 'offenses.violation_id', '=', 'violations.id')
            ->join('school_years','students.sy_id', '=', 'school_years.id')
            ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year')
            ->where('students.group_id', '=', 1)
            ->get();
        return view('senior.offense_records.index',['offenses' => $offenses]);
    }

    /**
     * Senior high add offense
     */
    public function add_offense_senior(Request $request){
        if ($request->isMethod('post')) {
            $offense = new Offense();
            unset($request['datatable_length']);
            unset($request['violation']);
            $offense->fill($request->all());
            if($offense->save()){
                Session::flash('message','Your student offense has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/senior/offense/');
            }
        }
    }

    //Junior high school

    /**
     * Junior high offenses
     */
    public function offense_junior(){
        $students = DB::table('students')
            ->join('school_years', 'students.sy_id', '=', 'school_years.id')
            ->select('students.*', 'school_years.school_year')
            ->where('students.group_id', '=', 2)
            ->get();
        $violations = Violation::all();
        return view('junior.stud_offense.index',[
            'violations' => $violations, 
            'students' => $students
        ]);
    }

    /**
     * Junior high offense record
     */
    public function offense_records_junior(){
        $offenses= DB::table('offenses')
            ->join('students', 'offenses.student_id', '=', 'students.student_id')
            ->join('violations', 'offenses.violation_id', '=', 'violations.id')
            ->join('school_years','students.sy_id', '=', 'school_years.id')
            ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year')
            ->where('students.group_id', '=', 2)
            ->get();
        return view('junior.offense_records.index',['offenses' => $offenses]);
    }

    /**
     * Junior high add offense
     */
    public function add_offense_junior(Request $request){
        if ($request->isMethod('post')) {
            $offense = new Offense();
            unset($request['datatable_length']);
            unset($request['violation']);
            $offense->fill($request->all());
            if($offense->save()){
                Session::flash('message','Your student offense has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/junior/offense/');
            }
        }
    }

    public function search_elem_offense(Request $request)
    {
        if ($request->isMethod('get')) {
            if(!empty($request->sy) && !empty($request->section)) {
                $sections = Section::all();
                $school_years = SchoolYear::all();
                $offenses= DB::table('offenses')
                    ->join('students', 'offenses.student_id', '=', 'students.student_id')
                    ->join('violations', 'offenses.violation_id', '=', 'violations.id')
                    ->join('school_years','students.sy_id', '=', 'school_years.id')
                    ->join('sections','students.section_id', '=', 'sections.id')
                    ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year,sections.section,sections.grade')
                    ->where([['students.group_id', '=', 3],['students.sy_id','=', $request->sy],['students.section_id','=', trim($request->section)]])
                    ->get();
                return view('elementary.offense_records.index',['sections' => $sections,'school_years' => $school_years,'offenses' => $offenses]);
            }
            else if(!empty($request->section)) {
                $sections = Section::all();
                $school_years = SchoolYear::all();
                $offenses= DB::table('offenses')
                    ->join('students', 'offenses.student_id', '=', 'students.student_id')
                    ->join('violations', 'offenses.violation_id', '=', 'violations.id')
                    ->join('school_years','students.sy_id', '=', 'school_years.id')
                    ->join('sections','students.section_id', '=', 'sections.id')
                    ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year,sections.section,sections.grade')
                    ->where([['students.group_id', '=', 3],['students.section_id','=', trim($request->section)]])
                    ->get();
                return view('elementary.offense_records.index',['sections' => $sections,'school_years' => $school_years,'offenses' => $offenses]);
            }
            else if(!empty($request->sy)) {
                $sections = Section::all();
                $school_years = SchoolYear::all();
                $offenses= DB::table('offenses')
                    ->join('students', 'offenses.student_id', '=', 'students.student_id')
                    ->join('violations', 'offenses.violation_id', '=', 'violations.id')
                    ->join('school_years','students.sy_id', '=', 'school_years.id')
                    ->join('sections','students.section_id', '=', 'sections.id')
                    ->select('students.*', 'school_years.school_year','sections.grade','sections.section')
                    ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year,sections.section,sections.grade')
                    ->where([['students.group_id', '=', 3],['students.sy_id','=', $request->sy]])
                    ->get();
                return view('elementary.offense_records.index',['sections' => $sections,'school_years' => $school_years,'offenses' => $offenses]);
            }
            else {
                $sections = Section::all();
                $school_years = SchoolYear::all();
                $offenses= DB::table('offenses')
                    ->join('students', 'offenses.student_id', '=', 'students.student_id')
                    ->join('violations', 'offenses.violation_id', '=', 'violations.id')
                    ->join('school_years','students.sy_id', '=', 'school_years.id')
                    ->join('sections','students.section_id', '=', 'sections.id')
                    ->selectRaw('students.*, offenses.*,violations.category,violations.violation,school_years.school_year,sections.section,sections.grade')
                    ->where('students.group_id', '=', 3)
                    ->get();
                return view('elementary.offense_records.index',['sections' => $sections,'school_years' => $school_years,'offenses' => $offenses]);
            }
        }
    }

    public function update_elem_offense(Request $request) {
        $update = Offense::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your Offense has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/records/');
        } else {
            return redirect('/elementary/records/');
        }
    }
}
