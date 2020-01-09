<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	 return view('login.index');
    }


public function create(Request $request)
    
    {
        return view('login.create');
    }

    public function verify(LoginRequest $request)
    {
        // $sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
    	// $result = DB::select($sql);

        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', $request->password)
            ->first();

        if($user)
        {
            $request->session()->put('user', $user);
            return redirect()->route('admin');
        }
        else
        {
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

 



}