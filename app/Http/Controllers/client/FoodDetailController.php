<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/27/2018
 * Time: 2:15 PM
 */

namespace App\Http\Controllers\client;

use App\Category;
use App\Food;
use Illuminate\Http\Request;

class FoodDetailController
{
    public function getIndex(Request $request)
    {
        $categories = Category::all();
        $selected_food = $request->get('id');
        $food = Food::find($selected_food);
        if ($food == null) {
            return view('error.404');
        }
//        $restaurant = DB::table('foods')
//            ->join()
        $relateFood = Food::where('restaurantID', $food->restaurantID);
        $list_relate = $relateFood->orderBy('created_at', 'DESC')->take(2)->get();
//        dd($list_relate);
//        $food = $food->where('id', $selected_food)->get();
        return view('client.detail', compact('categories', 'food', 'list_relate'));
    }

}