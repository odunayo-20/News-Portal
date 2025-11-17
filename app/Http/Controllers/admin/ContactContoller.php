<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactContoller extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }
}
