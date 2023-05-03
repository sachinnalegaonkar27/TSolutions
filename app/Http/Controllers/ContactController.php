<?php


namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('sachin27nalegaonkar@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('status', 'Your message has been sent successfully!');
    }
}
