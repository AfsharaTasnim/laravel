<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'afsa';
        $age = 12;
        return view('welcome',compact(['name','age']));
    }
}
