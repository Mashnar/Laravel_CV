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




    }

    public function delete(Request $request)
    {
        $user=User::findOrFail($request['id'])->delete();
         $user_all=User::all()->except(Auth::id());
         return view("main.main_admin",["user"=>$user_all]);

    }
}