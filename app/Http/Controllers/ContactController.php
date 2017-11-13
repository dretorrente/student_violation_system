<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use DB;
use Illuminate\Support\Facades\Session;
use SmsGateway;
class ContactController extends Controller
{

    public function sms_contact_elem(){
        $contacts = DB::table('contacts')->simplePaginate(10);
        return view('elementary.sms.contacts',['contacts' => $contacts]);
    }

    public function sms_compose_elem(){
        $contacts = Contact::all();
        return view('elementary.sms.compose',['contacts' => $contacts]);
    }
    public function sms_send_elem(Request $request){

        if(empty($request['receiver'])) {
            Session::flash('message','Receiver cannot be empty');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/elementary/compose/');
        } else{
            $result = '';
            $smsGateway = new SmsGateway('sample@gmail.com', '123456');
            $deviceID = 65980123;
            $message = $request['message'];
            foreach($request['receiver'] as $receiver) {
               $result = $smsGateway->sendMessageToNumber($receiver, $message, $deviceID);
            }
        }
        if($result['status'] ==401) {
            Session::flash('message','Error sending message');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/elementary/compose/');
        }
        Session::flash('message','Your Message has been succesfully sent!');
        Session::flash('alert-class', 'alert-success');
        return redirect('/elementary/compose/');
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
