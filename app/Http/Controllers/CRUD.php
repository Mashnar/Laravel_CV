<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;


class CRUD extends Controller
{
    //


    public function edit($id)
    {
    	$user=User::findOrFail($id);


//    	var_dump($user);


    	return view("CRUD.edit_form",["user"=>$user]);


    }


    public function update(Request $request)
    {
    //   $user=User::findOrFail(Auth::user()->id);
       /*
       $user->Imie=$request['Imie'];
       $user->Nazwisko=$request['Nazwisko'];
       $user->e_mail=$request['e_mail'];
       $user->PESEL=$request['PESEL'];
         $hashedPass=bcrypt($request['haslo']);
       $user->password=$hashedPass;
       $user->adres=$request['adres'];
       $user->opis_osoby=$request['opis_osoby'];

       $user->zainteresowania=$request['zainteresowania'];
       $user->umiejetnosci=$request['umiejetnosci'];
    
      $user->Doswiadczenie=$request['doswiadczenie'];
       $user->data_aktualizacji=date('Y-m-d H:i:s');\

       */
         //$user->save();
       if($request['password']==NULL)
       {
      
       $user = User::where('id',$request['id'])->update(request()->except('_token','password','id'));
       //var_dump($password);
       }
       else
       {
        $request['password']=bcrypt($request['password']);
        
       $user = User::where('id', $request['id'])->update(request()->except('_token','id'));
        //var_dump($request['password']);
       }




      $user_main = User::findOrFail(Auth::user()->id);
      if($user_main->is_admin==true)
      {
          $user_all=User::all()->except(Auth::id());
         return view("main.main_admin",["user"=>$user_all]);
      }
      else
        return view("main.main_page",["user"=>$user_main]);

//$hashedPass= $request['password'];
//$array = explode('', $hashedPass);
     //  $user = User::where('id',Auth::user()->id)->update('password',$hashedPass);




    }

    public function delete($id)
    {
        $user=User::findOrFail($id)->delete();
         $user_all=User::all()->except(Auth::id());
         return view("main.main_admin",["user"=>$user_all]);

    }
}