<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist() {
        $wishlistId = session('wishlistId');
        if(is_null($wishlistId)){
            return redirect()->route('main');
        };
        $wishlist = Wishlist::find($wishlistId);
        $wishlistProducts = $wishlist->products;
       
        if(count($wishlistProducts) == 0){
            return redirect()->route('main');
        }
        return view('pages.wishlist', compact('wishlist'));
    }

    public function addToWishlist($product_id) {
        $wishlistId = session('wishlistId');
        if(is_null($wishlistId)){
            $wishlist = Wishlist::create();
            session(['wishlistId' => $wishlist->id]);
        } else {
            $wishlist = Wishlist::find($wishlistId);
        }

       

        if($wishlist->products->contains($product_id)){
            return 'in_wish_list';
        } else {
            // dd($wishlist->products());
            $wishlist->products()->attach($product_id);
        }
        dd($wishlist);
        return true;
    }

    public function removeFromWishlist($product_id)
    {
        $wishlistId = session('wishlistId');
        if(is_null($wishlistId)){
            return false;
        }
        $wishlist = Wishlist::find($wishlistId);
        $wishlist->products()->detach($product_id);
        return redirect()->route('wishlist');
    }
}
