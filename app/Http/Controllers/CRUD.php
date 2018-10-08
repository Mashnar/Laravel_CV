<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
     // dd($request);
   if(Input::hasFile('plik'))
   {
    $data = file_get_contents(Input::file('plik')->getRealPath());
    $base64=base64_encode($data);
    echo $data;
    echo $base64;
//var_dump($data);
    $user =  User::where('id',$request['id'])->update(array('plik'=>$base64));
   }
       if($request['password']==NULL)
       {
      
       $user = User::where('id',$request['id'])->update(request()->except('_token','password','id','file'));
       //var_dump($password);
       }
       else
       {
        $request['password']=bcrypt($request['password']);
        
       $user = User::where('id', $request['id'])->update(request()->except('_token','id','plik'));
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

    public function download(Request $request)
    {
    return response()->make($request['plik'], 200, [
            'Content-type: application/pdf',
            'Content-Disposition: attachment; filename=file.pdf'
        ]);
    }
}