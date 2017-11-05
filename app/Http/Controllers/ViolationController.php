<?php

namespace App\Http\Controllers;
use App\Violation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ViolationController extends Controller
{

    public function violation_elem(){
        $violations = Violation::all();
        return view('elementary.violations.index',['violations' => $violations]);
    }
    public function add_violation_elem(Request $request){
        if ($request->isMethod('post')) {
            $violation = new Violation();
            $violation->violation    = $request['violation'];
            $violation->category     = $request['category'];
            $violation->1st_sanction = $request['1st_sanction'];
            $violation->2nd_sanction = $request['2nd_sanction'];
            $violation->3rd_sanction = $request['3rd_sanction'];
            $violation->4th_sanction = $request['4th_sanction'];
            $violation->5th_sanction = $request['5th_sanction'];
            $violation->6th_sanction = $request['6th_sanction'];
            $violation->7th_sanction = $request['7th_sanction'];
            $violation->save();
            return redirect('/elementary/violation/');
        }
    }
}
