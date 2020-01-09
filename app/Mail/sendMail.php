<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Cart;
use App\order;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct()
    {
        
    }

  
    public function build()
    {

    	//$result=Cart::content();

    

          $xx= DB::table('orders')
           ->where('p_id', session()->get('id'))
           ->get(['c_email']);
 

    	  $result= DB::table('orders')
           ->where('p_id', session()->get('id'))
           ->get();

        // dd(session()->get('id'));
      

       

         if (session()->get('aid')=='ss')
         {

     return $this->view('mail')->to($xx[0]->c_email)->with('productlist', $result);

         }

         else
         {

           return $this->view('email')->to($xx[0]->c_email);
           
         }


    }
    
}
