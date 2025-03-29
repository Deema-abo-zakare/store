<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use App\Models\admin\Category;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  
    public function index(){
        $products =Product::all();
        $categories = Category::all();

      //  $products =Product::take(3)->get();
        return view('home.index',compact('products','categories'));
    }



}
