<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact_us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactUs;
        request()->validate([
            "first_name"=>'required',
            "last_name"=>'required',
            'email' => 'required|string|email|max:255|confirmed',
            'email_confirmation' => 'required',
            "message"=>'required',
        ]);

        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');
        $contact->message = request('message');

        $contact->save();

        return redirect()->back()->with('message', 'Thank you for contacting us. We will get back to you!');

    }
}
