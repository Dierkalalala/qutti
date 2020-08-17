<?php

namespace App\Http\Controllers\Admin;

use App\FeaturedProducts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class FeaturedProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f_products = FeaturedProducts::all();
        return view('admin.featured.index', compact('f_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        return view('admin.featured.form', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        FeaturedProducts::truncate();
        $featuredIds = $request->product_id;
        foreach($featuredIds as $id) {
            $f_product = new FeaturedProducts();
            $f_product->product_id = $id;
            $f_product->save();
        }
        return redirect()->route('featured.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedProducts  $featuredProducts
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedProducts $featuredProducts)
    {
        return redirect()->route('featured.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedProducts  $featuredProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedProducts $featuredProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedProducts  $featuredProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedProducts $featuredProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedProducts  $featuredProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedProducts $featuredProducts)
    {
        //
    }
}
