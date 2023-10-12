<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {}
    public function index(){
        return view('products');
    }
    public function getProduct(){
        return view('full-product');
    }
    public function updateProduct(){}
}
