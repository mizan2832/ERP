<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubChaildMenuController extends Controller
{
    public function index() {
        return view('pages.menu.subchildmenu.create');
    }
}
