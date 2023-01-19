<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function index(){
        return Food::all();
    }
    public function hot(){
        return Food::where("hot_menu",1)->get();
    }
}
