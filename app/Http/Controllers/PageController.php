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
        return view('landing.navbar-links.products');
    }

    // Show the services page
    public function services()
    {
        return view('landing.navbar-links.services');
    }

    // Show the contact page
    public function contact()
    {
        return view('landing.navbar-links.contact');
    }
    public function prices()
    {
        return view('landing.components.prices');
    } 
     public function help_center()
    {
        return view('landing.components.help_center');
    }

    public function operations()
    {
        return view('landing.features.operations');
    }
    
    public function inventory_tracking()
    {
        return view('landing.features.inventory_tracking');
    }
    
    public function store_landingPage()
    {
        return view('landing.features.store_landingPage');
    } 
    
    public function integrations()
    {
        return view('landing.features.integrations');
    }
    
    public function manage_delivery()
    {
        return view('landing.features.manage_delivery');
    } 
    
    public function analytics()
    {
        return view('landing.features.analytics');
    }
}
