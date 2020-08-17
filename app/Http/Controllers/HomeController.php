<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function categories()
    {
        
    }
    public function brands()
    {
        $brands = Brand::all();
        return view('admin.brands', compact('brands'));
    }
    public function products()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}
