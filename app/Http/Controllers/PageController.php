<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Show the home page
    public function home()
    {
        return view('landing.home');
    }

    // Show the products page
    public function products()
    {
        return view('navbar-links.products');
    }

    // Show the services page
    public function services()
    {
        return view('navbar-links.services');
    }

    // Show the contact page
    public function contact()
    {
        return view('navbar-links.contact');
    }
}
