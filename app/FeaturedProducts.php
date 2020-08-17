<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProducts extends Model
{
    protected $fillable = ['product_id'];
    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function getProductName() {
        return $this->products;
    }
}
