<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Banner;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productsCount = Product::count();
        $bannersCount = Banner::count();

        return view('admin.dashboard', compact('productsCount', 'bannersCount'));
    }
}