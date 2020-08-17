<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status', 'fio', 'number', 'email', 'address', 'city', 'telephone', 'payment_type'];
    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('count');
    }

    public function getFullOrderPrice() {
        $sum = 0;
         foreach($this->products as $product){
            $sum += $product->getFullPrice();
        }
        return $sum;
    }
}
