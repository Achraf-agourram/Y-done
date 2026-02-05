<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Models\Restaurent;
use Illuminate\Http\Request;

class RestaurentController extends Controller
{
    public function home ()
    {
        return view('home');
    }

    public function myRestaurants ()
    {
        return view('myrestaurants');
    }

    public function newRestaurant ()
    {
        return view('restauForm');
    }

    public function addRestaurant (StoreRestaurantRequest $request)
    {
        $restaurant = new Restaurent();

        $restaurant->fill($request->safe()->only([
            'restaurentName',
            'location',
            'capacity',
            'opening_time',
            'closing_time',
        ]));

        $restaurant->save();

        return redirect('/my-restaurants')->with('success', 'Your Restaurant was added succesfully !');
    }
}
