<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "laravel Course form Nguyen Tuan Anh";
        $x = 1;
        $y = 2;
        return view('products.index', compact('title', 'x', 'y')); // compact mutiple varliable
    }

    public function about() {
        return 'this is About page';
    }
}
