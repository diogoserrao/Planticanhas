<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!Auth::user() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'Acesso negado');
        }
        
        $productsCount = Product::count();
        $bannersCount = Banner::count();

        return view('admin.dashboard', compact('productsCount', 'bannersCount'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_admin) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }

            Auth::logout();
            return back()->withErrors([
                'email' => 'Você não tem permissão para acessar o painel administrativo.',
            ])->withInput($request->except('password'));
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput($request->except('password'));
    }

    
}
