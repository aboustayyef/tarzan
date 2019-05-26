<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    function index($a, $b){
        return view('pages.'.$this->getPageCode($a,$b));
    }

    private function getPageCode($a,$b){
        return $a . ucfirst($b);
    }
}

// Pages Available so far:
//      servicesHaulage
//      servicesWarehousing