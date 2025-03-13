<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:10|min:3',

         ]);
    $categories = new Category();
    $categories->name = $request->name;
    $categories->save();
    return redirect()->back();
}
public function edit($id){
    $category= Category::find($id);
    return view('admin.categories.edit', compact('category'));
}
public function update(Request $request, $id){
    $category = Category::find($id);
    $category->save();
    return redirect('categories');
}
public function destroy($id)
{
    $category = Category::find($id);
        $category->delete();
        return redirect()->back();
}

}

