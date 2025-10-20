<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class WContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->only(['name', 'email', 'subject', 'message']));

        return back()->with('success', 'Message saved successfully!');
    }

    // 📩 Show all contacts
    public function index()
    {
        $contacts = Contact::latest()->paginate(10); // 10 per page
        return view('admin.contacts.index', compact('contacts'));
    }
}
