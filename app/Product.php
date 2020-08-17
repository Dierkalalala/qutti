<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'brand_id', 'name', 'img', 'code', 'price', 'product_code', 'quantity', 'status', 'description'];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function product_images() {
        return $this->hasMany(ProductImage::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function getFullPrice() {
        return $this->price * $this->pivot->count;
    }
    
    public function featured_product() {
        return $this->hasOne(FeaturedProducts::class);
    }
}
