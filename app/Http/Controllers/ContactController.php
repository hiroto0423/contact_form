<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

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
}
