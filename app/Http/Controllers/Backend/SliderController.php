<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $query = Slider::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $sliders = $query->latest()->paginate(10)->withQueryString();

        return view('admin.backend.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.backend.sliders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'link'        => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'published'   => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/sliders'), $imageName);
            $validated['image'] = $imageName;
        }

        $validated['published'] = $request->boolean('published');

        Slider::create($validated);

        return redirect()->route('admin.sliders')->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'link'        => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'published'   => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($slider->image && file_exists(public_path('upload/sliders/' . $slider->image))) {
                unlink(public_path('upload/sliders/' . $slider->image));
            }

            $image     = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/sliders'), $imageName);
            $validated['image'] = $imageName;
        }

        $validated['published'] = $request->boolean('published');

        $slider->update($validated);

        return redirect()->route('admin.sliders')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image && file_exists(public_path('upload/sliders/' . $slider->image))) {
            unlink(public_path('upload/sliders/' . $slider->image));
        }

        $slider->delete();

        return redirect()->route('admin.sliders')->with('success', 'Slider deleted successfully.');
    }
}
