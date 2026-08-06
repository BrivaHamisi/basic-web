<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::factory()->create([
            'title' => 'Welcome to Our Website',
            'description' => 'Discover our services and solutions designed to help you succeed.',
            'image' => 'slider-1.jpg',
            'link' => '#',
            'published' => true,
        ]);
    }
}
