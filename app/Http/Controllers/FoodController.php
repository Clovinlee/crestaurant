<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function index(){
        return Food::with("foodcategory")->get();
    }
    public function hot(){
        return Food::with("foodcategory")->where("hot_menu",1)->get();
    }
    public function getfood(Request $r, $id){
        return Food::with("foodcategory")->where("id",$id)->get();
    }
}
