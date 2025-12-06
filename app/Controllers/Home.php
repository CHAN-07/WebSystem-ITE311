<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Serve the redesigned home view with hero banner
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
