<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    protected $fillable =[
    'name',
    ];

    public function photos(){
    	return $this->morphMany('App\Photo', 'imageable');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
