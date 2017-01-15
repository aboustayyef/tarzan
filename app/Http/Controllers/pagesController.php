<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index($a, $b){
    	return view('pages.'.$this->getPageCode($a,$b));
    }

    function postEmail(Request $request){
		$this->validate($request, [
	        'email' => 'required|email',
	        'emailmessage' => 'required|max:300',
	    ]);

		// Send Email if validation succeeds
		$this->doSendEmail($request->get('email'), $request->get('emailmessage'));

		return redirect('/learn/contact')->with('successMessage', 'Your Email Has Been Sent');

    }

    private function getPageCode($a,$b){
    	return $a . ucfirst($b);
    }

    private function doSendEmail($email, $body){
      $to='mustapha.hamoui@gmail.com';
      $messageSubject='[Tarzan Contact Form]';

      // send email
      mail($to,$messageSubject,$body,'From: '.$email."\r\n");

    }
}

// Pages Available so far:
// 		servicesHaulage
// 		servicesWarehousing