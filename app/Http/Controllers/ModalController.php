<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index(Request $request) {
        return response()->json($request);
    }
}
