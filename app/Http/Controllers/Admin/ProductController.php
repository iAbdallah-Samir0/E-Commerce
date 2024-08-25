<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.pages.products.add');

    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'regular_price' => $request->input('regular_price'),
            'sale_price' => $request->input('sale_price'),
            'SKU' => $request->input('sku'),
            'stock_status' => $request->input('stock_status'),
            'featured' => $request->input('featured'),
            'quantity' => $request->input('quantity'),
            'image' => $request->input('image'),
            'images' => $request->input('images'),
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
        ]);
        session()->flash('add');
        return redirect()->route('admin.products.index')->with('Success','Product Added Successfully');


//        DB::table('products')->insert([
//            ['id' => '25'],
//            ['name' => 'body'],
//            ['slug' => 'body'],
//            ['short_description' => 'body'],
//            ['description' => 'body'],
//            ['regular_price' => 'body'],
//            ['sale_price' => 'body'],
//            ['SKU' => 'body'],
//            ['stock_status' => 'body'],
//            ['featured' => 'body'],
//            ['quantity' => 'body'],
//            ['image' => 'body'],
//            ['images' => 'body'],
//            ['category_id' => 'body'],
//            ['brands_id' => 'body'],
//            ['created_at' => 'body'],
//            ['updated_at' => 'body'],
//        ]);
//        DB::insert();
//        return redirect()->route('admin.pages.products.index')->with('success','product added successfully');


//        Product::create([
//            'id' => $request->id,
//            'name' => $request->name,
//            'slug' => $request->slug,
//            'short_description' => $request->short_description,
//            'description' => $request->description,
//            'regular_price' => $request->regular_price,
//            'sale_price' => $request->sale_price,
//            'SKU' => $request->SKU,
//            'stock_status' => $request->stock_status,
//            'featured' => $request->featured,
//            'quantity' => $request->quantity,
//            'image' => $request->image,
//            'images' => $request->images,
//            'category_id' => $request->category_id,
//            'brands_id' => $request->brands_id,
//            'created_at' => $request->created_at,
//            'updated_at' => $request->updated_at,
//        ]);
//        Product::saved($request->all());
//        return redirect()->route('admin.pages.products.index')->with('success','product added successfully');


//        $product = new Product();
//        $product->id = $request->id;
//        $product->name = $request->name;
//        $product->slug = $request->slug;
//        $product->short_description = $request->short_description;
//        $product->description = $request->description;
//        $product->regular_price = $request->regular_price;
//        $product->sale_price = $request->sale_price;
//        $product->SKU = $request->SKU;
//        $product->featured = $request->featured;
//        $product->quantity = $request->quantity;
//        $product->image = $request->image;
//        $product->images = $request->images;
//        $product->category_id = $request->category_id;
//        $product->brand_id = $request->brand_id;
//        $product->created_at = $request->created_at;
//        $product->updated_at = $request->updated_at;
//        $product->save();
//        return redirect()->route('admin.pages.products.index')->with('success','product added successfully');

    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
