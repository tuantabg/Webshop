<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view('index');
    }

    public function getCategory() {
        return view('category');
    }
}
