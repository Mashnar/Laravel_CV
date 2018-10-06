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
        'password' => $request['haslo'],
    ];

   var_dump($credentials);
       
    if (Auth::attempt($credentials)) {

$test='chuj';
      return view("main.main_page",["test"=>$test]);
    }
        
        return 'Failure';
    }



    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
    
}
