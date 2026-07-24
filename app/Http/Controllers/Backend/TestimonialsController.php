<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function Testimonials()
    {
        return view('admin.testimonials.testimonials_all');
    }
}
