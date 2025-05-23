<?php

namespace App\Http\Controllers;

abstract class Bookcontroller extends Controller
{
    public function index()
    {
        return view('car.index');
    }
}

// Compare this snippet from app/Http/Controllers/bookcontroller.php:
// <?php                