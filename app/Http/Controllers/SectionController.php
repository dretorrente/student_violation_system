<?php

namespace App\Http\Controllers;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                return redirect('/elementary/section/');
            }
        }
    }


}
