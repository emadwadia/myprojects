<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cont extends Controller


{

    public function welc () {
        return view('welc');
    }

    public function hom () {
        return view('hom');
    }

    public function about () {
        return view('about');
    }
    public function port () {
        return view('port');
    }
}
