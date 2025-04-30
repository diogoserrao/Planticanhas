<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('category')->orderBy('order')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
                'category' => 'required|max:255',
                'image' => 'nullable|image|max:2048',
                'available' => 'boolean',
                'featured' => 'boolean',
                'order' => 'integer|min:0',
            ]);

            $data = [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'category' => $request->input('category'),
                'available' => $request->has('available'),
                'featured' => $request->has('featured'),
                'order' => $request->input('order', 0)
            ];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('products', 'public');
                $data['image'] = $path;
            }

            Product::create($data);

            return redirect()->route('products.index')
                ->with('success', 'Produto criado com sucesso.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Erro ao salvar: ' . $e->getMessage()]);
        }
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
            'image' => 'nullable|image|max:2048',
            'available' => 'boolean',
            'featured' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'available' => $request->has('available'),
            'featured' => $request->has('featured'),
            'order' => $request->input('order', 0)
        ];

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

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

    public function showProducts()
    {
        $products = Product::orderBy('category')->orderBy('order')->get()->groupBy('category');
        return view('produtos', compact('products'));
    }
}