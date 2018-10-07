<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

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
    print_r($request->all());
    }
}
