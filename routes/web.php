<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/brand', 'Admin\BrandController');

Route::resource('/admin/category', 'Admin\CategoryController');

Route::resource('/admin/product', 'Admin\ProductController');

Route::resource('/admin/slider', 'Admin\SliderController');

Route::resource('/admin/featured', 'Admin\FeaturedProductsController');

Route::get('/', 'MainController@index')->name('main');

Route::post('/search', 'MainController@search')->name('search');

Route::get('/blog', 'MainController@blog')->name('blog');

Route::get('/compare', 'MainController@compare')->name('compare');

Route::get('/contacts', 'MainController@contacts')->name('contacts');

Route::get('/wishlist', 'WishlistController@wishlist')->name('wishlist');

Route::get('/wishlist/add/{id}', 'WishlistController@addToWishlist')->name('wishlist-add');

Route::get('/wishlist/remove/{id}', 'WishlistController@removeFromWishlist')->name('wishlist-remove');

Route::get('/cart', 'CartController@cart')->name('cart');

Route::get('/cart/add/{id}', 'CartController@addToCart')->name('add-cart');

Route::get('/cart/remove/{id}', 'CartController@removeFromCart')->name('remove-cart');

Route::get('/cart/decrease/{id}', 'CartController@decreaseFromCart')->name('decrease-from-cart');

Route::get('/checkout', 'CartController@checkOut')->name('cart-checkout');

Route::post('/checkout-confirmation', 'CartController@confirmPayment')->name('checkout-confirmation');

Route::get('/blog/{blogpost?}', 'MainController@blogPost')->name('blog-post');

Route::get('get-product/{id}', 'MainController@getOneGood')->name('get-product');

Route::get('/{categories?}', 'MainController@categories')->name('categories');

Route::get('/{categories}/{product}', 'MainController@product')->name('product');

Route::get('/search/{categoryName}/{productName}', 'MainController@search_results')->name('search-results');

Route::post('/ajaxsearch', 'MainController@search_ajax')->name('ajax-search');