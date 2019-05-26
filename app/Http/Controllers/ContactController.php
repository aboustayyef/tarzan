<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSent;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function index()
    {
        return view('pages.contact.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'emailmessage' => 'required|max:300',
        ]);

        // Send Email if validation succeeds
        Mail::send(new ContactSent($request->get('email'), $request->get('emailmessage')));

        return redirect('/learn/contact')->with('successMessage', 'Your Email Has Been Sent');
    }

}