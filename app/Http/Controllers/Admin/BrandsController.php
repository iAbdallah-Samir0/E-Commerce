<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
      $brands = Brand::all();
      return view('admin.pages.brands.index', compact('brands'));

    }

    public function create()
    {
        return view('admin.pages.brands.add');
    }

    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'image' => $request->input('image'),
        ]);
        session()->flash('add');
        return redirect()->route('admin.brands.index')->with('Success', 'Brand Added Successfully');
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
