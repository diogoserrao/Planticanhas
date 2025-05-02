<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('order')->get();
    
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'image' => 'required|image|max:2048',
                'active' => 'boolean',
                'order' => 'nullable|integer|min:0',
            ]);

            $data = [
                'active' => $request->has('active'),
                'order' => $request->input('order', 0)
            ];

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('banners', 'public');
                $data['image'] = $path;
            }

            Banner::create($data);

            return redirect()->route('admin.banners.index')
                ->with('success', 'Banner criado com sucesso.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Erro ao salvar: ' . $e->getMessage()]);
        }
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'nullable|max:255',
            'image' => 'nullable|image|max:2048',
            'link' => 'nullable|string|max:255',
            'active' => 'boolean',
            'order' => 'nullable|integer|min:0', // Adicionado este campo
        ]);
    
        // Tratar o campo 'active' quando não está marcado
        $validated['active'] = $request->has('active');
        
        // Tratar o campo 'order' com valor padrão caso não seja fornecido
        $validated['order'] = $request->input('order', 0);
    
        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $path = $request->file('image')->store('banners', 'public');
            $validated['image'] = $path;
        }
    
        $banner->update($validated);
    
        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner atualizado com sucesso.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner excluído com sucesso.');
    }
}
