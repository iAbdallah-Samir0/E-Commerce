<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
       return view('admin.pages.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.categories.add');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'image'=> $request->input('image'),
        ]);
        session()->flash('add');
        return redirect()->route('admin.categories.index')->with('Success','Category Added Successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
