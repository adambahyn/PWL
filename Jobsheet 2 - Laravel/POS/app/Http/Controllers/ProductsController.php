<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food()
    {
        return view('food');
    }

    public function health()
    {
        return view('health');
    }

    public function home()
    {
        return view('home-care');
    }

    public function baby()
    {
        return view('baby');
    }
}
