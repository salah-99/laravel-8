<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcom extends Controller
{
    function wc() {
        return view('welcome');
    }
}
