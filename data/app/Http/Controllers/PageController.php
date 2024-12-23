<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PageController extends Controller
{
    public function home() {
        $portfolios = Portfolio::all();
        return view('home', compact('portfolios'));
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function contact() {
        return view('contact');
    }
}
