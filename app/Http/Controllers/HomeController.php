<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        $portfolios = Portfolio::latest()->take(6)->get();

        return view('home', compact('services','portfolios'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::latest()->get();

        return view('portfolio', compact('portfolios'));
    }
}