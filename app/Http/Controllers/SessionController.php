<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;



class SessionController extends Controller
{
     public function create()
    {
        return view('sessions.create');
    }


     public function store(Request $request)
    {




    	 $credentials = [
        'e_mail' =>$request['e_mail'],
        'password' => $request['password'],
    ];

  // var_dump($credentials);
       
    if (Auth::attempt($credentials)) {
/*

      return view("main.main_page",["test"=>$test]);
      */

      $user = User::findOrFail(Auth::user()->id);

     // var_dump($user);
      return view("main.main_page",["user"=>$user]);
    }
        
        return 'Failure';
    }



    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
    
}
