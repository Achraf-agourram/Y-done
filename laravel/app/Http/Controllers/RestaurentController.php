<?php

namespace App\Http\Controllers;

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

    public function addRestaurant ()
    {
        return "hello";
    }
}
