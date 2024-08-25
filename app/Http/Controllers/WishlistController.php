<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist');


//        $WishItems = Cart::instance('wishlist')->content();
//        return view('cart', compact('WishItems'));
    }

//    public function addToWishlist(Request $request)
//    {
//        $product = Product::find($request->id);
//        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
//        Cart::instance('wishlist')->add($product->id,$product->name,$request->quantity,$price)->associate(Product::class);
//        return redirect()->back()->with('message','Success ! Item has been added successfully!');
//
//    }
//
//    public function updateWishlist(Request $request)
//    {
//        Cart::instance('wishlist')->update($request->rowId,$request->quantity);
//        return redirect()->route('wishlist.index');
//    }
}
