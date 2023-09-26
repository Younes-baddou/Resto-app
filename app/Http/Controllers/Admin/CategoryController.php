<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create')->with('success', 'Category created succesfully');
    }
    public function store(CategoryStoreRequest $request)
    {
        $image = $request->file('image')->store('public/categories');
        Category::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'image'=>$image,
        ]);
        return to_route('Admin.categories.index')->with('success', 'Category created succesfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit' , compact('category'));
    }
    
    public function update( Request $request , Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',  
        ]);
        $image = $category->image;
        if($request->hasfile('image')){
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/categories');
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('Admin.categories.index')->with('success', 'Category updated succesfully');
    }

    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        $category->delete();
        return to_route('Admin.categories.index')->with('danger', 'Category deleted succesfully');
    }
}
