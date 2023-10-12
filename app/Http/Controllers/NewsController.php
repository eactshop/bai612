<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('news');
    }
    public function getNews(){
        return view('full-news');
    }
}
