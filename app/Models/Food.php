<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function cart(){
        return $this->hasMany(Cart::class,"food_id");
    }

    public function foodcategory(){
        return $this->hasMany(food_category::class,"food_id");
    }
}
