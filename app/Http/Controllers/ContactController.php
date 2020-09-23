<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    public function contact_save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255|string',
            'phone' => 'required|regex:/[0-9]/|not_regex:/[a-zA-Z]/|min:7|max:10',
            'email' => 'required|email|unique:contacts|string|max:255',
            'city' => 'required|string|max:255',
            'street' => 'nullable|string|max:255'
        ]);

        // dd($request);

        $data = array(
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'category' => $request->input('category')
        );  

        Mail::to('kushal.gautam@chaudharygroup.com')->send(new SendMail($data));
        Mail::to('cgdigital.leads@chaudharygroup.com')->send(new SendMail($data));  //pw for testacc:- testgmail123

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->city = $request->input('city');
        $contact->street_name = $request->input('street');
        $contact->category = $request->input('category');
        $contact->save();

        return redirect('/about-tcl')->with('success','Information stored. We will soon contact you. Thank you!');
    }
}
