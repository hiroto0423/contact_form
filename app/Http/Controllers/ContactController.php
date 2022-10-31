<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show() {
        return view('show');
    }

    public function comfirm(Request $request) {
        $form= $request->all();
        unset($form['_token']);
        return view('comfirm',['contact'=>$form]);
    }

    public function create(Request $request) {
        $form = $request->all();
        unset($form['_token']);
        Contact::create($form);
        return view('end');
    }
}
