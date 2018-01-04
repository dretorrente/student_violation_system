<?php
/**
 * Created by PhpStorm.
 * User: davet
 * Date: 30/12/2017
 * Time: 9:31 AM
 */

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
use Excel;
class ReportController extends Controller
{
    public function elem_report() {
        $sections = DB::table('sections')
            ->select('sections.*')
            ->where('sections.group_id', '=', 3)
            ->get();
        $students = DB::table("offenses")
            ->join('students', 'students.student_id', '=', 'offenses.student_id')
            ->select(DB::raw("COUNT(offenses.student_id) count,students.first_name,students.middle_name, students.last_name"))
            ->groupBy("offenses.student_id")
            ->where('students.group_id', '=', 3)
            ->whereYear('offenses.date_commit', '=', date('Y'))
            ->whereMonth('offenses.date_commit', '=', date('m'))
            ->get();
        return view('elementary.monthly.index',['sections' => $sections,'students'=>$students]);
    }
    public function downloadExcel(Request $request, $type)
    {
        if(!empty($request->month) && !empty($request->section)) {

            $section = $request->section;
            $yearmonth = $request->month;
            $arr = explode("-", $yearmonth, 2);
            $year = $arr[0];
            $month = substr($yearmonth, strpos($yearmonth, "-") + 1);
            $results = DB::table("offenses")
                ->join('students', 'students.student_id', '=', 'offenses.student_id')
                ->join('sections','students.section_id', '=', 'sections.id')
                ->select(DB::raw("COUNT(offenses.student_id) count,students.first_name,students.adviser, students.last_name,sections.section,sections.grade"))
                ->groupBy("offenses.student_id")
                ->where([['students.group_id', '=', 3],['students.section_id','=', trim($request->section)]])
                ->whereYear('offenses.date_commit', '=',  $year)
                ->whereMonth('offenses.date_commit', '=', $month)
                ->get();
            if(count($results) > 0) {
                return Excel::create('Prefect Elementary Report', function ($excel) use ($results) {
                    $excel->sheet('mySheet', function ($sheet) use ($results) {
                        $sheet->cell('C5', function ($cell) {
                            $cell->setValue('           MONTHLY REPORT IN ELEMENTARY DEPARTMENT')->setAlignment('center');

                        });
                        $sheet->cell('C6', function ($cell) {

                            // manipulate the cell
                            $cell->setValue('     Assumption College of Davao')->setAlignment('center');

                        });
                        $sheet->cell('C7', function ($cell) {

                            // manipulate the cell
                            $cell->setValue('     Integrated Basic Education (IBED) Department')->setAlignment('center');

                        });
                        $sheet->cell('C8', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('      Elementary Department Prefect of Discipline Office')->setAlignment('center');

                        });
                        $sheet->cell('C9', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('       Juan P Cabaguio Avenue, Davao City P.O. Box 80908 Philipines')->setAlignment('center');

                        });
                        $sheet->cell('C10', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  (082) 225 -0720 to 23 local 1080  221-4726 or 227 -6818')->setAlignment('center');

                        });

                        $sheet->cell('C11', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  assumption@acd.edu.ph www.assumptiondavao.edu.ph')->setAlignment('center');

                        });
                        $sheet->cell('C12', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  PAASCU Accredited-Level II')->setAlignment('center');

                        });

                        $sheet->cell('C13', function ($cell) {
                            // manipulate the cell
                            $cell->setValue(' ')->setAlignment('center');
                        });

                        $sheet->appendRow(14, array(
                            null,null, $results[0]->grade .' - '. $results[0]->section
                        ));
                        $sheet->cell('C14', function ($cell) {
                            // manipulate the cell
                            $cell->setAlignment('center');
                        });
                        $sheet->appendRow(15, array(
                            null,null, 'ADVISER: '.$results[0]->adviser
                        ));
                        $sheet->cell('C15', function ($cell) {
                            // manipulate the cell
                            $cell->setAlignment('center');
                        });

                        $sheet->cell('B17', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('NAME OF STUDENT')->setAlignment('right');
                        });

                        $sheet->cell('D17', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('Total number of Offenses')->setAlignment('left');
                        });

                        for ($i = 0; $i < count($results); $i++) {
                            $sheet->appendRow(17 + $i + 1, array(
                                null, $results[$i]->first_name . ' ' . $results[$i]->last_name, null, $results[$i]->count
                            ));


                            $sheet->cell('B1' . ($i + 8), function ($cell) {
                                // manipulate the cell
                                $cell->setAlignment('center');
                            });
                            $sheet->cell('D1' . ($i + 8), function ($cell) {
                                // manipulate the cell
                                $cell->setAlignment('center');
                            });

                        }

                    });
                })->download($type);
            } else {
                Session::flash('message','No reports on the month!');
                Session::flash('alert-class', 'alert-danger');
                return redirect('/elemmonthly/');
            }

        }

    }
    public function junior_report() {
        $sections = DB::table('sections')
            ->select('sections.*')
            ->where('sections.group_id', '=', 2)
            ->get();
        $school_years = DB::table('school_years')
            ->select('school_years.*')
            ->where('school_years.group_id', '=', 2)
            ->get();
        $students = DB::table("offenses")
            ->join('students', 'students.student_id', '=', 'offenses.student_id')
            ->select(DB::raw("COUNT(offenses.student_id) count,students.first_name,students.middle_name, students.last_name"))
            ->groupBy("offenses.student_id")
            ->where('students.group_id', '=', 2)
            ->whereYear('offenses.date_commit', '=', date('Y'))
            ->get();
        return view('junior.yearly.index',['sections' => $sections,'students'=>$students,'school_years'=>$school_years]);
    }

    public function junior_download(Request $request, $type)
    {
        if(!empty($request->sy) && !empty($request->section)) {

            $section = $request->section;
            $results = DB::table("offenses")
                ->join('students', 'students.student_id', '=', 'offenses.student_id')
                ->join('sections','students.section_id', '=', 'sections.id')
                ->join('school_years','students.sy_id', '=', 'school_years.id')
                ->select(DB::raw("COUNT(offenses.student_id) count,students.first_name,students.adviser, students.last_name,sections.section,sections.grade"))
                ->groupBy("offenses.student_id")
                ->where([['students.group_id', '=', 2],['students.section_id','=', trim($request->section)],['students.sy_id','=', trim($request->sy)]])
                ->get();
            if(count($results) > 0) {
                return Excel::create('Prefect Junior Report', function ($excel) use ($results) {
                    $excel->sheet('mySheet', function ($sheet) use ($results) {
                        $sheet->cell('C5', function ($cell) {
                            $cell->setValue('           YEARLY REPORT IN JUNIOR DEPARTMENT')->setAlignment('center');

                        });
                        $sheet->cell('C6', function ($cell) {

                            // manipulate the cell
                            $cell->setValue('     Assumption College of Davao')->setAlignment('center');

                        });
                        $sheet->cell('C7', function ($cell) {

                            // manipulate the cell
                            $cell->setValue('     Integrated Basic Education (IBED) Department')->setAlignment('center');

                        });
                        $sheet->cell('C8', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('      Junior Department Prefect of Discipline Office')->setAlignment('center');

                        });
                        $sheet->cell('C9', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('       Juan P Cabaguio Avenue, Davao City P.O. Box 80908 Philipines')->setAlignment('center');

                        });
                        $sheet->cell('C10', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  (082) 225 -0720 to 23 local 1080  221-4726 or 227 -6818')->setAlignment('center');

                        });

                        $sheet->cell('C11', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  assumption@acd.edu.ph www.assumptiondavao.edu.ph')->setAlignment('center');

                        });
                        $sheet->cell('C12', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('  PAASCU Accredited-Level II')->setAlignment('center');

                        });

                        $sheet->cell('C13', function ($cell) {
                            // manipulate the cell
                            $cell->setValue(' ')->setAlignment('center');
                        });

                        $sheet->appendRow(14, array(
                            null,null, $results[0]->grade .' - '. $results[0]->section
                        ));
                        $sheet->cell('C14', function ($cell) {
                            // manipulate the cell
                            $cell->setAlignment('center');
                        });
                        $sheet->appendRow(15, array(
                            null,null, 'ADVISER: '.$results[0]->adviser
                        ));
                        $sheet->cell('C15', function ($cell) {
                            // manipulate the cell
                            $cell->setAlignment('center');
                        });

                        $sheet->cell('B17', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('NAME OF STUDENT')->setAlignment('right');
                        });

                        $sheet->cell('D17', function ($cell) {
                            // manipulate the cell
                            $cell->setValue('Total number of Offenses')->setAlignment('left');
                        });

                        for ($i = 0; $i < count($results); $i++) {
                            $sheet->appendRow(17 + $i + 1, array(
                                null, $results[$i]->first_name . ' ' . $results[$i]->last_name, null, $results[$i]->count
                            ));


                            $sheet->cell('B1' . ($i + 8), function ($cell) {
                                // manipulate the cell
                                $cell->setAlignment('center');
                            });
                            $sheet->cell('D1' . ($i + 8), function ($cell) {
                                // manipulate the cell
                                $cell->setAlignment('center');
                            });

                        }
                    });
                })->download($type);
            } else {
                Session::flash('message','No reports on that year!');
                Session::flash('alert-class', 'alert-danger');
                return redirect('/jryearly/');
            }

        }

    }

}