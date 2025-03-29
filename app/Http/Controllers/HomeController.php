<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
       // return view('admin.products.index', compact('products','categories'));
        return view('/home');
    }

}
