<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function index() {
        return view('gallery');
    }
}
