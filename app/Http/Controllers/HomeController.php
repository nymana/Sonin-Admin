<?php

namespace App\Http\Controllers;

use App\Model\Newspaper;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $newspaper =  Newspaper::orderby('id','desc')->get();
        return view('home',['newspaper'=>$newspaper,]);
    }

    public function about(){
    	return view('about');
    }
}
