<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // Function index ini akan mengembalikan view hello.blade.php
    public function index()
    {
        return view('hello');
    }
}