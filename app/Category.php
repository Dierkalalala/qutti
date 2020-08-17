<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'img', 'code', 'description', 'is_popular'];
    public function products() {
        return $this->hasMany('App\Product');
    }
    
    public function getLowestPrice() {
        $prices = [];
        for ($i=0; $i < count($this->products) ; $i++) { 
            array_push($prices, $this->products[$i]->price); 
        };
        return min($prices);
    }
    
    public function getHighestPrice() 
    {
        $prices = [];
        for ($i=0; $i < count($this->products) ; $i++) { 
            array_push($prices, $this->products[$i]->price); 
        };
        return max($prices);
    }


    public function getAllBrands() 
    {
        $brandIds = [];
        for ($i=0; $i < count($this->products) ; $i++) { 
            array_push($brandIds, $this->products[$i]->brand); 
        };
        return $brandIds;
    }



}
