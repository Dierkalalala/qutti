<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('pages.main', compact('categories'));
    }

    public function categories($cat, Request $request) {
        
        $category = Category::where('code', $cat)->get()->first();

        if(is_null($category)){
            return abort(404);
        }

        $productBuilder = $category->products;
        
        if($request->filled('brands'))
        {
            for ($i=0; $i < count($request->brands) ; $i++) {
                $brand = $request->brands[$i]; 
                $category->products = array_filter($productBuilder, function($product) use ($brand){
                    if($product['brand_id'] == $brand){
                        return $product;
                    }
                        
                });
            }
        }

        return view('pages.categories', compact('category'));
    }

    public function product($cat, $productCode) {
        $category = Category::where('code', $cat)->first();
        if(is_null($category)){
            return abort(404);
        }
        $product = $category->products()
        ->where('code', $productCode)
        ->get()
        ->first();
        if(is_null($product)){
            return abort(404);
        }
        
        return view('pages.product', compact('product'));
    }

    public function blog() {
        $posts = BlogPost::all();
        return view('pages.blog', compact('posts'));
    }

    public function search_ajax(Request $req) {
        $productName = $req->product_name;
        $products = Product::where('name', 'LIKE', '%'.$productName.'%')->limit(10)->get();
        foreach ($products as $product) {
            $product['img'] = Storage::url($product['img']);
            $product['link'] = route('product', [$product->category['code'], $product['code']]);
        }
        return $products;
    }

    public function search(Request $request) {
        $productName = $request->product_name;

        /* $isCategorySearched = Category::where('name', 'LIKE', '%'.$productName.'%')->first(); */
        $products = Product::where('name', 'LIKE', '%'.$productName.'%')->get();

        if($products) {
            $categoryCode = $products[0]->category->code;
        }

        return redirect()->route('search-results', [$categoryCode, $productName]);
    }

    public function search_results($categoryCode, $productName) {

        $category = Category::where('code', $categoryCode)->get()->first();
        $products = $category->products()
        ->where('name','LIKE','%'.$productName.'%')
        ->orWhere('code','LIKE','%'.$productName.'%')
        ->orWhere('category_id', $category->id)->get();
        return view('pages.search', ['products' => $products, 'queryName' => $productName ]);
    }

    public function compare() {
        return view('pages.compare');
    }

    public function contacts() {
        return view ('pages.contacts');
    }
    
    public function login() {
        return view ('pages.login');
    }
    
    

    public function blogPost($blogPostName){
        $post = BlogPost::where('code', $blogPostName)->get()->first();
        return view ('pages.blog-details', compact('post'));
    }

    public function getOneGood($id) {
        $good = Product::find($id);
        $good->product_images;
        foreach($good->product_images as $image) {
            $image['img'] = Storage::url($image['img']);
        }
        return $good;
    }
}
