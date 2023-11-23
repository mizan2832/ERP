<?php

namespace App\Http\Controllers;

use App\Models\TopMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function store($menu_name,Request $request){

        if ($menu_name === 'TopMenu') {
            $top_menu = new TopMenu();
            $top_menu->top_menu_name = $request->top_menu;
            $top_menu->save();
            return response()->json($top_menu);
        }


    }
}
