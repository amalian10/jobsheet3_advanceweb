<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('about');
    }

    public function cooming() {
        return view('cooming');
    }

    public function howitworks() {
        return view('howitworks');
    }

    public function pricing() {
        return view('pricing');
    }


    public function product() {
        return view('product');
    }

    public function profile() {
        return view('profile');
    }
}
