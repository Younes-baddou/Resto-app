<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index' , compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.menus.create', compact('categories'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStoreRequest $request)
    {
        $image = $request->file('image')->store('public/menus');

        $menu = Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }

        return to_route('Admin.menus.index')->with('success', 'Menu created successfully.')->with('success', 'Menu created succesfully');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $categories =  Category::all();
        return view('admin.menus.edit' , compact('menu','categories' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required', 
            'price' => 'required',  
        ]);
        $image = $menu->image;
        if($request->hasfile('image')){
            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menus');
        }
        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);
        if($request->has('categories')){
            $menu->categories()->sync($request->categories);
        }
        return to_route('Admin.menus.index')->with('success', 'Category updated succesfully')->with('success', 'Menu updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Menu $menu)
    {
      Storage::delete($menu->image); 
      $menu->delete();
      return to_route('Admin.menus.index')->with('danger', 'Category deleted succesfully');
    }
    
}
