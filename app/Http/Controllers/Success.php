<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Success extends Controller
{
    public function index() {
        return view('success');
    }
}
