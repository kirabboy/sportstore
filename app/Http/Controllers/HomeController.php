<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home (){
        return view('home');
    }
    public function listblog (){
        return view('listblog');
    }
    public function blog (){
        return view('blog');
    }

   

}   