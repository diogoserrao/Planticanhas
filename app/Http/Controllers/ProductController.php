<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('order')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required|max:255',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'available' => 'boolean',
            'featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        Product::create($validated);
        
        return redirect()->route('products.index')
            ->with('success', 'Produto criado com sucesso.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required|max:255',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'available' => 'boolean',
            'featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        $product->update($validated);
        
        return redirect()->route('products.index')
            ->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        
        $product->delete();
        
        return redirect()->route('products.index')
            ->with('success', 'Produto excluído com sucesso.');
    }


}