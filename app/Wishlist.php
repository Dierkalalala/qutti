<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = ['user_id', 'wishlist_id'];

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
