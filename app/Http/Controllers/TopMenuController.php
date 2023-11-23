<?php

namespace App\Http\Controllers;

use App\Models\TopMenu;
use Illuminate\Http\Request;

class TopMenuController extends Controller
{
    public function index(Request $request) {

        if($request->ajax()) {
            $topMenu = TopMenu::all();
            return response()->json($topMenu);
        } else{
            $topMenu = TopMenu::all();
            return view('pages.menu.supermenu.create')->withTopMenu($topMenu);
        }

    }
}
