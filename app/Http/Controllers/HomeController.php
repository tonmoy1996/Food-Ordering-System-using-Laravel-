<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\VerifyInputRequest;
use App\User;
use App\Product;


use Fpdf;
class HomeController extends Controller
{
    public function index(Request $request)
    {
    

        //$cat = Category::find(2);
        //dd($cat->products);
        //dd(User::all());
      // $value=$request->session()->get('user'); 
       //dd($value->username);

    //     if(!$request->session()->has('user'))
    //     {
    //      return redirect()->route('login');
    //     }
    //     return view('home.index');


    $result = Product::all();
    // dd($result);
  // dd(count($result));
  // dd($result[0]->cat_name);

$pdf = new FPDF('P','mm','A4');

$pdf::AddPage();

//set font to arial, bold, 14pt
$pdf::SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )
$pdf::image('images/1183640006.jpg',70,5,50,'C','/login');
$pdf::Cell(50 ,5,'Welcome To FoodCorner',0,1,'C');

$pdf::Cell(59   ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf::SetFont('Arial','',12);

$pdf::Cell(130  ,5,'[Street Address]',0,0);
$pdf::Cell(59   ,5,'',0,1);//end of line

$pdf::Cell(130  ,5,'[City, Country, ZIP]',0,0);
$pdf::Cell(25   ,5,'Date',0,0);
$pdf::Cell(34   ,5,'[dd/mm/yyyy]',0,1);//end of line

$pdf::Cell(130  ,5,'Phone [+12345678]',0,0);
$pdf::Cell(25   ,5,'Invoice #',0,0);
$pdf::Cell(34   ,5,'[1234567]',0,1);//end of line

$pdf::Cell(130  ,5,'Fax [+12345678]',0,0);
$pdf::Cell(25   ,5,'Customer ID',0,0);
$pdf::Cell(34   ,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf::Cell(189  ,10,'',0,1);//end of line

//billing address
$pdf::Cell(100  ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,'[Name]',0,1);

$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,'[Company Name]',0,1);

$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,'[Address]',0,1);

$pdf::Cell(10   ,5,'',0,0);
$pdf::Cell(90   ,5,'[Phone]',0,1);

//make a dummy empty cell as a vertical spacer
$pdf::Cell(189  ,10,'',0,1);//end of line

//invoice contents
$pdf::SetFont('Arial','B',12);

$pdf::Cell(50 ,10,'ID',1,0,'C');
$pdf::Cell(70   ,10,'CategoryName',1,0,'C');
$pdf::Cell(69   ,10,'Description',1,1,'C');//end of line

$pdf::SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

 foreach ($result as $res) {

$pdf::Cell(50  ,10,$res->id,1,0,'C');
$pdf::Cell(70   ,10,$res->p_name,1,0,'C');
$pdf::Cell(69   ,10,$res->p_price,1,1,'C');
    











// $pdf::Cell(130  ,5,'UltraCool Fridge',1,0);
// $pdf::Cell(25   ,5,'-',1,0);
// $pdf::Cell(34   ,5,'3,250',1,1,'R');//end of line

// $pdf::Cell(130  ,5,'Supaclean Diswasher',1,0);
// $pdf::Cell(25   ,5,'-',1,0);
// $pdf::Cell(34   ,5,'1,200',1,1,'R');//end of line

// $pdf::Cell(130  ,5,'Something Else',1,0);
// $pdf::Cell(25   ,5,'-',1,0);
// $pdf::Cell(34   ,5,'1,000',1,1,'R');//end of line

//summary
// $pdf::Cell(130  ,5,'',0,0);
// $pdf::Cell(25   ,5,'Subtotal',0,0);
// $pdf::Cell(4    ,5,'$',1,0);
// $pdf::Cell(30   ,5,'4,450',1,1,'R');//end of line

// $pdf::Cell(130  ,5,'',0,0);
// $pdf::Cell(25   ,5,'Taxable',0,0);
// $pdf::Cell(4    ,5,'$',1,0);
// $pdf::Cell(30   ,5,'0',1,1,'R');//end of line

// $pdf::Cell(130  ,5,'',0,0);
// $pdf::Cell(25   ,5,'Tax Rate',0,0);
// $pdf::Cell(4    ,5,'$',1,0);
// $pdf::Cell(30   ,5,'10%',1,1,'R');//end of line

// $pdf::Cell(130  ,5,'',0,0);
// $pdf::Cell(25   ,5,'Total Due',0,0);
// $pdf::Cell(4    ,5,'$',1,0);
// $pdf::Cell(30   ,5,'4,450',1,1,'R');//end of line




    }
$pdf::Output();
    exit;
   
}
}