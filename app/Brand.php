<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'code', 'logotype', 'description', 'is_popular', 'tab_image'];
    public function products () {
        return $this->hasMany(Product::class);
    }
}
