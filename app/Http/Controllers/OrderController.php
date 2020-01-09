<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

use Cart;
use App\Http\Requests\createordercheck;
use Mail;
use App\Mail\newmail;
use App\Mail\sendMail;

use Fpdf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $result = Product::all();

        return view('order.menu')
            ->with('productlist', $result);


        
    }

  
    public function mail()
    {
        
     
 




    }

 
    public function create()
    {
        //
    }

 
    public function store(createordercheck $request)
    {

         //Mail::send(new sendMail());

         
       $r= DB::table('orders')
              ->orderBy('p_id', 'DESC')
              ->first();
    
       


      $date=date("d-m-Y");
     
        $result=Cart::content();


   


        foreach ($result as  $res) {

                
          
     $data = [
             'p_id' => $r->p_id+1,
             'c_name' =>  $request->cname,
             'c_mobile' => $request->mob,
             'c_email' => $request->email,
             'c_address' => $request->add,
             'p_name' =>$res->name,
             'p_price' => $res->price,
             'quantity' => $res->qty,
             'total'=>$res->price*$res->qty,
             'date' =>$date,
             'status' => "u",
            
        ];

        Cart::destroy();
        DB::table('orders')
            ->insert($data);








        }

    return redirect()->route('menu');

    }

 
    public function show()
    {
       
        $result=Cart::content();


            return view('order.show')
            ->with('productlist', $result);


    }

 public function remove($id)
    {


      Cart::update($id, 0);

       
      return redirect()->route('cart.show');


    }




 
    public function edit(order $order)
    {
        //
    }

  
    public function update(Request $request)
    {
        

   
      Cart::update($request->id, $request->qty);

       // $re=$request->qty;
      $total=$request->qty*$request->price;


   return response()->json(['success'=> $total]);
   


    }

   
    public function showw()
    {
        
         $result=Cart::content();
         dd($result);
  }

    public function notification()
    {
          
         $result= DB::table('orders')
           ->where('status', 'u')
           ->get();

          //  dd(count($result));


            return view('order.notification')
            ->with('productlist', $result);
  }



    public function current(Request $request , $id)
    {



          
        $data = [
            'status' => 'c'
          
        ];

        DB::table('orders')
            ->where('p_id', $request->id)
            ->update($data);


    session()->put('id',  $request->id);
    session()->put('aid',  "ss");

      Mail::send(new sendMail());

         return redirect()->route('order.notify');
  }


    public function currentshow()
    {
          
         $result= DB::table('orders')
           ->where('status', 'c')
           ->get();

          //  dd(count($result));


            return view('order.current')
            ->with('productlist', $result);
  }

      public function pending(Request $request , $id)
    {
          
        $data = [
            'status' => 'p'
          
        ];

        DB::table('orders')
            ->where('p_id', $request->id)
            ->update($data);

         return redirect()->route('current');
  }



    public function pendingshow()
    {
          
         $result= DB::table('orders')
           ->where('status', 'p')
           ->get();

          //  dd(count($result));


            return view('order.pending')
            ->with('productlist', $result);
  }




    public function complete(Request $request , $id)
    {



          
        $data = [
            'status' => 'com'
          
        ];




        DB::table('orders')
            ->where('p_id', $request->id)
            ->update($data);


       $result = DB::table('orders')
          ->where('p_id',$request->id)
          ->where('status','com')
          ->get();
  //  dd($result);

//print clip





$pdf = new FPDF('P','mm','A4');

$pdf::AddPage();

//set font to arial, bold, 14pt
$pdf::SetFont('Arial','B',14);


$pdf::Cell(180 ,10,'Welcome To FoodCorner',0,1,'C');

$pdf::Cell(180   ,4,'Delivery Slip',0,1,'C');//end of line




//set font to arial, regular, 12pt
$pdf::SetFont('Arial','',12);

$pdf::Cell(130  ,5,'12/A Taltola Khilgah',0,0);
$pdf::Cell(59   ,5,'',0,1);//end of line

$pdf::Cell(130  ,5,'Dhaka Bangladesh',0,0);
$pdf::Cell(25   ,5,'Date',0,0);
$pdf::Cell(34   ,5,'28/08/2018',0,1);//end of line

$pdf::Cell(130  ,5,'Phone 01711728392',0,0);
$pdf::Cell(25   ,5,'Invoice #',0,0);
$pdf::Cell(34   ,5,'1234567',0,1);//end of line

$pdf::Cell(130  ,5,'Fax [+12345678]',0,0);
$pdf::Cell(25   ,5,'Customer ID',0,0);
$pdf::Cell(34   ,5,$result[0]->p_id,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf::Cell(189  ,10,'',0,1);//end of line

//billing address
$pdf::Cell(100  ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,$result[0]->c_name,0,1);
$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,$result[0]->c_address,0,1);
$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,$result[0]->c_email,0,1);



$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,$result[0]->c_mobile,0,1);

//make a dummy empty cell as a vertical spacer
$pdf::Cell(189  ,10,'',0,1);//end of line

//invoice contents
$pdf::SetFont('Arial','B',12);

$pdf::Cell(10 ,10,'ID',1,0,'C');
$pdf::Cell(70   ,10,'Item Name',1,0,'C');
$pdf::Cell(54   ,10,'Quantity',1,0,'C');//end of line
$pdf::Cell(54   ,10,'Price',1,1,'C');//end of line

$pdf::SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

 foreach ($result as $res) {

$pdf::Cell(10  ,10,$res->id,1,0,'C');
$pdf::Cell(70  ,10,$res->p_name,1,0,'C');
$pdf::Cell(54   ,10,$res->quantity,1,0,'C');
$pdf::Cell(54   ,10,$res->p_price,1,1,'C');
   

    }
$pdf::Output();
    exit;









        
     


//print clip
         return redirect()->route('order.notify');
  }



    public function showcomplete()
    {
          
        $result= DB::table('orders')
           ->where('status', 'com')
           ->get();

          //  dd(count($result));






            return view('order.complete')
            ->with('productlist', $result);

  }




    public function orderDelete(Request $request , $id)
    {

         session()->put('id',  $request->id);
          Mail::send(new sendMail());

             DB::table('orders')
             ->where('p_id', $request->id)
             ->delete();

         


        
   

  

         return redirect()->route('order.notify');

  }

}
