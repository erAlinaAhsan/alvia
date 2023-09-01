<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser(){
        return view('welcome');
    }
    public function showTest(){
        return view('test');
    }

}
