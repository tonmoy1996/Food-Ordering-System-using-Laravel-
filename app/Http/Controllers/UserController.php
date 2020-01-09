<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\makeuser;
use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    
    public function index()
    {
              
       $result = user::all();


        return view('user.list')
            ->with('productlist', $result);
    }

   
    public function create()
    {

       return view('user.create');
    }

   
    public function store(makeuser $request)
    {
       
        $image = $request->file('image');


      $new_name = rand() . '.' . $image->getClientOriginalExtension();

  

      $image->move(public_path('images'), $new_name);


     $data = [
             'username' => $request->username,
             'password' => $request->password,
             'path' => $new_name
        ];


    

        //$data = $request->all();
        
        DB::table('users')
            ->insert($data);

        return redirect()->route('user.list'); 





    }

  
    public function show(user $user)
    {
       
    }

  
    public function edit($id)
    {
        
      $cat = user::find($id);

        return view('user.edit')
            ->with('user', $cat);   

        
    }


    public function update(Request $request)
    {
       

       $user=user::find($request->uid);

       $user->username=$request->username;
       $user->password=$request->password;

          $user->save();

        return redirect()->route('user.list');

    }

    public function delete($id)
    {
        
          $cat = user::find($id);

        return view('user.delete')
            ->with('user', $cat);   
    }


 public function destroy(Request $request)
    {
       

        user::destroy($request->uid);
      

        return redirect()->route('user.list');

    }




}
