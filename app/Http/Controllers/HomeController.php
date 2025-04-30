<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with banners and products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch active banners ordered by their display order
        $banners = Banner::where('active', true)
            ->orderBy('order')
            ->get();
        
        // Fetch products grouped by category
        $products = Product::orderBy('category')
            ->orderBy('order')
            ->get()
            ->groupBy('category');
        
        // Return the index view with all data
        return view('index', compact('banners', 'products'));
    }
}