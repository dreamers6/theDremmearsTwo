<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dreamersController extends Controller
{
    public function index() {
        return view("index") ;
    }
}
