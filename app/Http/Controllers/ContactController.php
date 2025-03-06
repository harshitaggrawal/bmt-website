<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show Contact Form
    public function create()
    {
        return view('contact');
    }

    // Store Contact Form Data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent!');

    }

    // Show All Messages
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact-list', compact('contacts'));
    }
}
