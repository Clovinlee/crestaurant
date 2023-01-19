<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_category extends Model
{
    use HasFactory;

    protected $table = "category_food";

    protected $with = ["category"];

    public function food(){
        return $this->hasOne(Food::class,"id","food_id");
    }

    public function category(){
        return $this->hasOne(Category::class,"id","category_id");
    }
}
