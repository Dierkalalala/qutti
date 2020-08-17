<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.products.form', ['categories' => $categories, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        $path = $request->file('img')->store('products');
        $params = $request->all();
        $params['img'] = $path;
        $product = Product::create($params);

        $images = $request->file('images');   
    
        foreach($images as $image) {
            $productImage = new ProductImage();
            $productImage->product_id = $product->id;
            $path = $image->store('product_images'); 
            $productImage->img = $path;
            $productImage->save();
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->product_images;
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.products.form',  ['categories' => $categories, 'brands' => $brands, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $images = $request->file('images');
        if($images) {
            $productId = $product->id;
            ProductImage::where('product_id', $productId)->delete();
            foreach($images as $image) {
                $productImage = new ProductImage();
                $productImage->product_id = $productId;
                $path = $image->store('product_images'); 
                $productImage->img = $path;
                $productImage->save();
            }
        }

        $params = $request->all();
        if(is_null($request->file('img'))){

        } else {
            Storage::delete($product->img);
            $path = $request->file('img')->store('product');
            $params['img'] = $path;
        }
        $product->update($params);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
