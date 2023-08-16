<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function workWithUs() {
        return view('workWithUs');
    }
}
