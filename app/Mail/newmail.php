<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Cart;
use App\order;

class newmail extends Mailable
{
    use Queueable, SerializesModels;

   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            $result= DB::table('orders')
           ->where('id', session()->get('id'))
           ->get();

        return $this->markdown('email')->to('saha.tonmoy1996@gmail.com')->with('productlist', $result);                              


    }
}
