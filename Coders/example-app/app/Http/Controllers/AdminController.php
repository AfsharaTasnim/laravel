<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return "this is adimn dash";
    }
    public function login(){
        return view('name');
    }
    public function manager(){
        return"this manager";
    }
}
