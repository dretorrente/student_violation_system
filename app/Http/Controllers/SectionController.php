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

    //Senior high

    /**
     * Senior high section dashboard
     */
    public function section_senior(){
        $sections = Section::all();
        return view('senior.section.index',['sections' => $sections]);
    }

    /**
     * Senior high add section
     */
    public function add_section_senior(Request $request){
        if ($request->isMethod('post')) {
            $section = new Section();
            $section->fill($request->all());
            if($section->save()){
                Session::flash('message','Your section has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/senior/section/');
            }
        }
    }

    /**
     * Senior high delete section
     */
    public function delete_section_senior($id) {
        $section = Section::find($id);
           if ($section) {
               $section->delete();
                Session::flash('message','Your violation has been deleted!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/senior/section/');
           } else {
                return redirect('/senior/section/');
           }
    }

    /**
     * Senior high update section
     */
    public function update_section_senior(Request $request) {
        $update = Section::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/senior/section/');
        } else {
            return redirect('/senior/section/');
        }
    }

    //Junior high

    /**
     * Junior high section dashboard
     */
    public function section_junior(){
        $sections = Section::all();
        return view('junior.section.index',['sections' => $sections]);
    }

    /**
     * Junior high add section
     */
    public function add_section_junior(Request $request){
        if ($request->isMethod('post')) {
            $section = new Section();
            $section->fill($request->all());
            if($section->save()){
                Session::flash('message','Your section has been succesfully added!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/junior/section/');
            }
        }
    }

    /**
     * Junior high delete section
     */
    public function delete_section_junior($id) {
        $section = Section::find($id);
           if ($section) {
               $section->delete();
                Session::flash('message','Your violation has been deleted!');
                Session::flash('alert-class', 'alert-info');
                return redirect('/junior/section/');
           } else {
                return redirect('/junior/section/');
           }
    }

    /**
     * Junior high update section
     */
    public function update_section_junior(Request $request) {
        $update = Section::find($request['id']);
        if ($update) {
            $update->fill($request->all());
            $update->save();
            Session::flash('message','Your student has been succesfully update!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/junior/section/');
        } else {
            return redirect('/junior/section/');
        }
    }
}
