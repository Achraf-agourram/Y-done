<?php

namespace App\Http\Controllers;

use App\Models\Restaurent;
use Exception;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showDefaultMenu ($id)
    {
        $restaurant = Restaurent::with(['menu.category.dishes'])->where('owner_id', auth()->id())->findOrFail($id);
        $menu = $restaurant->menu;

        try{
            $defaultCategory = $menu->category->first();
            $menu->setRelation('category', $menu->category->slice(1));

        }catch(Exception $er){
            $defaultCategory = null;
        }

        return view('menu', compact('restaurant', 'menu', 'defaultCategory'));
    }
}
