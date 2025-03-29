<?php

namespace App\Http\Controllers;

use App\Models\admin\Category;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');

    }

    public function index()
    {

        $categories = Category::all();
      //  $products = Product::all();
      $products = Product::where('user_id', Auth::id())->paginate(2);

        return view('admin.products.index', compact('products','categories'));
    }

    public function create()
    {

        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:10|min:3',
             'quantity'=>'required',
             'price'=>'required' ,
             'description'=>'required' ,
             'category_id'=>'required' ,


        ]);
    $Product = new Product;
    $Product->name = $request->name;
    $Product->quantity = $request->quantity;
    $Product->price = (float)$request->price;
    $Product->description = $request->description;
    $Product->category_id = $request->category_id;
    $Product->user_id = Auth::id();

    $Product->save();
    return redirect()->back();
}
    public function edit($id){
        $product= Product::find($id);
        $categories = Category::all();
        //$category_name = Category::where('id',$product->category_id)->first();
        $category_name = Category::find($product->category_id);
        return view('admin.products.edit', compact('product' ,'categories','category_name'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('products');
    }

    public function destroy($id)
{
    $product = Product::find($id);
        $product->delete();
        return redirect()->back();
}

}
