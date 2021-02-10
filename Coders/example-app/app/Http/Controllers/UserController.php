<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function profile($name='default')
    {
         return view('profile',compact('name'));
    }
}
