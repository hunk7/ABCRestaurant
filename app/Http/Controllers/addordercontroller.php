<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addordercontroller extends Controller
{
    public function index($user)
    {
    	$user = User::findOrfail($user);
        return view('addorder.index',[
        	'user'=> $user,
        ]);
    }
}
