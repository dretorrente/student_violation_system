<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use DB;
use Illuminate\Support\Facades\Session;
class ContactController extends Controller
{

    public function sms_contact_elem(){
        $contacts = DB::table('contacts')->simplePaginate(10);
        return view('elementary.sms.contacts',['contacts' => $contacts]);
    }

    public function sms_compose_elem(){
        return view('elementary.sms.compose');
    }

    public function add_contact_elem(Request $request){
        if ($request->isMethod('post')) {
            $contact = new Contact();
            $contact->fill($request->all());
            if($contact->save()){
                Session::flash('message','Your Contact has been succesfully added!');
                Session::flash('alert-class', 'alert-success');
                return redirect('/elementary/contacts/');
            }
        }
    }
}
