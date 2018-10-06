<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');//przekierowywuje do blade create
    }


    public function store(Request $request)

    {

    //	print_r($request->all());
    	 $this->validate(request(), [
            'Imie' => 'required',
            'PESEL'=>'required',
            "Nazwisko"=>"required",
            'e_mail' => 'required|email',
            'haslo' => 'required'
        ]);
        
$hashedPass=bcrypt($request->haslo);

       $user = new User;
   $user->Imie = $request->Imie;
   $user->PESEL = $request->PESEL;
   $user->Nazwisko = $request->Nazwisko;
   $user->e_mail = $request->e_mail;
   $user->password = $hashedPass;
   $user->save();

         auth()->login($user);//robi sesje z tymi danymi
           return redirect()->to('/main');
    /*
  



    	
    	*/
    }
}
