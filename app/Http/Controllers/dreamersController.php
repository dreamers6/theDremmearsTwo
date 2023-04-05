<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dreamersController extends Controller
{
    public function ayoub() {
        return view("ayoub") ;
    }
    public function anass() {
        return view("anass") ;
    }
    public function hamid() {
        return view("hamid") ;
    }
}
