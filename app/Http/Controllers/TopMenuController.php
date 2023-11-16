<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopMenuController extends Controller
{
    public function index() {
        return view('pages.menu.supermenu.create');
    }
}
