<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['photo', 'title', 'link', 'description'];
    protected $table = 'slider';
}
