<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'title' => 'nullable|max:255',
            'subtitle' => 'nullable|max:255',
            'image' => 'required|image|max:2048',
            'link' => 'nullable|url|max:255',
            'active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
            $validated['image'] = $path;
        }

        Banner::create($validated);

        return redirect()->route('banners.index')
            ->with('success', 'Banner criado com sucesso.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'nullable|max:255',
            'subtitle' => 'nullable|max:255',
            'image' => 'nullable|image|max:2048',
            'link' => 'nullable|url|max:255',
            'active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $path = $request->file('image')->store('banners', 'public');
            $validated['image'] = $path;
        }

        $banner->update($validated);

        return redirect()->route('banners.index')
            ->with('success', 'Banner atualizado com sucesso.');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }
        
        $banner->delete();

        return redirect()->route('banners.index')
            ->with('success', 'Banner excluído com sucesso.');
    }
}