<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function index() {
        return view('pages.menu.submenu.create');
    }
}
