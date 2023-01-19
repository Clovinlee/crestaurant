<?php

namespace App\Http\Controllers;

use App\Models\food_category;
use App\Http\Requests\Storefood_categoryRequest;
use App\Http\Requests\Updatefood_categoryRequest;

class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storefood_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefood_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food_category  $food_category
     * @return \Illuminate\Http\Response
     */
    public function show(food_category $food_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food_category  $food_category
     * @return \Illuminate\Http\Response
     */
    public function edit(food_category $food_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefood_categoryRequest  $request
     * @param  \App\Models\food_category  $food_category
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefood_categoryRequest $request, food_category $food_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food_category  $food_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(food_category $food_category)
    {
        //
    }
}
