<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactCreated;


class ContactController extends Controller
{
    //
        public function create()
    {
    	return view('includes/contact');
    }

    public function store(ContactRequest $request)
    {

    	
    	$message =Message::create($request->only('name','email','message'));
    	Mail::to('dsieroger@gmail.com')
    	    ->send(new ContactCreated($message));


        flashy('Votre message a été envoyer avec succes!!');
        return redirect()->route('path_home');
    }
}
