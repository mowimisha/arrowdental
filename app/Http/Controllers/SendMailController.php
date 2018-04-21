<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
    	$content = [
    		'title'=> 'Itsolutionstuff.com mail', 
    		'body'=> 'The body of your message.',
    		'button' => 'Click Here'
    		];

    	$receiverAddress = 'michaelmagero2@gmail.com';

    	Mail::to($receiverAddress)->send(new LegalAid($content));

    	dd('mail send successfully');
    }
}
