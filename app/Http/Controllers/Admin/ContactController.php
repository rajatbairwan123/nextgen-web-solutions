<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function delete($id)
    {
        Contact::find($id)->delete();

        return back()->with('success','Lead Deleted');
    }
}