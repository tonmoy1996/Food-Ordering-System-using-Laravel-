<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Cart;

class ProductController extends Controller
{
    public function list()
    {
    	
    	$result = DB::table('products')
    		->join('categories', 'products.cat_id', '=', 'categories.cat_id')
    		->get();
        
      //  $result = Product::all();

//dd($result);
    	return view('product.list')
    		->with('productlist', $result);
    }


    public function create()
    {
    	$catlist = DB::table('categories')
    		->get();

        return view('product.create')
        	->with('catlist', $catlist);
    }

    public function store(CreateProductRequest $request)
    {

 //      //  dd("hi");

       

 //        //dd($data);

 //  //images description
        // $imagefile=$_FILES['image']['name'];

        // dd($imagefile);

 //    $imagefile=sha1($_FILES['image']['name']);
 //    //  dd($imagefile);
 //  // $imagefile=date('Y-m-d-h-i-s').$_FILES['image']['name'];
 //   $destination='images'.$imagefile;
 // //  dd($destination);



 //   $filename= $_FILES['image']['tmp_name'];
 //   //dd($filename);



 //     move_uploaded_file($filename, $destination);



//new method

        $image = $request->file('image');


      $new_name = rand() . '.' . $image->getClientOriginalExtension();

  

      $image->move(public_path('images'), $new_name);


     $data = [
             'cat_id' => $request->catid,
             'p_name' => $request->p_name,
             'p_price' =>$request->price,
             'details' => $request->desc,
             'path' => $new_name,
             'status'=>'availabe'
        ];

        
        DB::table('products')
            ->insert($data);

        return redirect()->route('product.list');
    }

    public function edit($id)
    {

        $cat = Product::find($id);

        return view('product.edit')
            ->with('product', $cat);  
        
    }


        public function update(Request $request)
    {
       

       $product=Product::find($request->pid);

       $product->p_name=$request->pname;
       $product->p_price=$request->price;
       $product->details=$request->desc;

          $product->save();

        return redirect()->route('product.list');

    }

    public function delete($id)
    {



          $cat = Product::find($id);

        return view('product.delete')
            ->with('product', $cat);
        
    }

    public function destroy(Request $request, $id)
    {

        Product::destroy($request->pid);
      

        return redirect()->route('product.list');
        
    }
      public function detail($id)
    {

          $result=Product::find($id);
      

        return view('product.details')->with('productlist', $result);
        
    }

      public function cart(Request $request)
    {

      
       $result=Product::find($request->id);

       
       $data['qty']=$request->qty;
       $data['id']=$request->id;
       $data['name']=$result->p_name;
       $data['price']=$result->p_price;


      // dd($data);

       Cart::add($data);

      
     return redirect()->route('menu');


    }
 
}
