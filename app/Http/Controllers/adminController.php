<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
       public function index(Request $request)
    {
    	//$cat = Category::find(2);
        //dd($cat->products);
    	//dd(User::all());

    	// if(!$request->session()->has('user'))
    	// {
    	// 	return redirect()->route('login');
    	// }
        return view('admin.admin');
    }
}
