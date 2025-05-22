<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class CaraSewaController extends Controller
{
    public function caraSewa()
    {
        $jumbotron = \App\Models\Setting::where('post_as', 'jumbotron')
            ->where('key', 'cara_sewa_header')
            ->first();

        return view('caraSewa', compact('jumbotron'));
    }
}
