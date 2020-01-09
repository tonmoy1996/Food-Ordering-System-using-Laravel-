<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function index()
    {

    $data = array('name'=>"Tonmoy");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('saha.tonmoy1996@gmail.com', 'Mail From Test Laravel')->subject
            ('Laravel Basic Testing Mail');
         $message->from('sahatonmoy999@gmail.com','Tonmoy999');
      });
      
      echo "Email Sent. Check your inbox.";


    }
}
