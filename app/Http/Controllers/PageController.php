<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function services()
    {
        return view('services');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }
}
