<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use App\FeaturedProducts;
use App\Slider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('system.master', function ($view) {
            $view->with('categories', Category::get());
        });

        View::composer('components.main.slider', function ($view) {
            $view->with('slides', Slider::get());
        });

        View::composer('components.main.particles.featured-product', function ($view) {
            $view->with('products', FeaturedProducts::get());
        });

        View::composer('pages.main', function ($view) {
            $view->with('categories', Category::where('is_popular', 1)->get());
        });

        view()->composer('components.main.hot', function ($view) {
            $brands = Brand::where('is_popular', 1)->get();
            foreach($brands as $brand){
                $count;
                if(count($brand->products) <= 20) {
                    $count = count($brand->products);
                } else {
                    $count = 20;
                }
                $brand->products = $brand->products->random($count);    
            }
            $view->with('brands', $brands);
        });
    }
}
