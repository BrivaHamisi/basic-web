<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    public function Testimonials()
    {
        $testimonials = Testimonial::latest()->paginate(5);
        return view('admin.backend.testimonials.index', compact('testimonials'));
    }
    //End Method

    public function edit(Testimonial $testimonial)
    {
        return view('admin.backend.testimonials.edit', compact('testimonial'));
    }
    //End Method

 public function update(Request $request, Testimonial $testimonial)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'message'  => 'required|string',
        'photo'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = $request->only(['name', 'position', 'message']);
    $data['published'] = $request->has('published');

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/testimonials/' . $testimonial->photo));
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move(public_path('upload/testimonials'), $filename);
        $data['photo'] = $filename;
    }

    $testimonial->update($data);

    return redirect()->route('testimonials')
        ->with('message', 'Testimonial updated successfully.')
        ->with('alert-type', 'success');
}
    //End Method

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo) {
            @unlink(public_path('upload/testimonials/' . $testimonial->photo));
        }

        $testimonial->delete();

        return redirect()->route('testimonials')
            ->with('message', 'Testimonial deleted successfully.')
            ->with('alert-type', 'success');
    }
    //End Method
}
