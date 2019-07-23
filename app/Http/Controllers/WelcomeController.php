<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('front.home.home-content');
    }

    public function about() {
        return view('front.about.about-content');
    }
    public function category() {
        return view('front.form.form-content');
    }
}





