<?php

namespace App\Http\Controllers;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class SectionController extends Controller
{

    public function section_elem(){
        $sections = Section::all();
        return view('elementary.section.index',['sections' => $sections]);
    }
    public function add_section_elem(Request $request){
        if ($request->isMethod('post')) {
            $section = new Section();
            $section->fill($request->all());
            if($section->save()){
                Session::flash('message','Your section has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/elementary/section/');
            }
        }
    }

    public function delete_section_elem($id) {
        $section = Section::find($id);
           if ($section) {
               $section->delete();
                Session::flash('message','Your violation has been deleted!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/elementary/section/');
           } else {
                return redirect('/elementary/section/');
           }
    }


    public function update_section_elem(Request $request) {
        $update = Section::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/elementary/section/');
        } else {
            return redirect('/elementary/section/');
        }
    }


}
