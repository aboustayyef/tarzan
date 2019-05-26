<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index($a, $b){
        return view('pages.'. $a . ucfirst($b) );
    }
}

// Pages Available so far:
//      servicesHaulage
//      servicesWarehousing