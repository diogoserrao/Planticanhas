<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with banner data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch active banners ordered by their display order
        $banners = Banner::where('active', true)
            ->orderBy('order')
            ->get();
            
        // You can add other data needed for the homepage here
        
        // Return the index view with banners data
        return view('index', compact('banners'));
    }
}