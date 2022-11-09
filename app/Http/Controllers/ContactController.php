<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{
    public function show() {
        return view('show');
    }

    public function comfirm(ContactRequest $request) {
        $form= $request->all();
        unset($form['_token'],$form['first_name'],$form['last_name']);
        return view('comfirm',['contact'=>$form]);
    }

    public function create(Request $request) {
        $form = $request->all();
        unset($form['_token']);
        Contact::create($form);
        return view('end');
    }

    public function showManegement() {
        $datas = Contact::paginate(10);
        $form = [];
        return view('management',['datas' => $datas,'form' => $form]);
    }

    public function serach(Request $request) {
        $form = $request->all();
        $fullname = $form['fullname'];
        $gender = $form['gender'];
        $start_date = $form['start_date'];
        $end_date = $form['end_date'];
        $email = $form['email'];
        $contacts = Contact::doSearch($fullname,$gender,$start_date,$end_date,$email);
        if(empty($form['fullname'])){
            $form['fullname'] = '';
        }
        if(empty($form['gender'])){
            $form['gender'] = '';
        }
        if(empty($form['start_date'])){
            $form['start_date'] = '';
        }
        if(empty($form['end_date'])){
            $form['end_date'] = '';
        }
        if(empty($form['email'])){
            $form['email'] = '';
        }
        return view('management',['datas' => $contacts,'form' => $form]);
    }
    
    public function delete(Request $request) {
        $contact = Contact::find($request->id);
        $contact->delete();
        return back();
    }
}
