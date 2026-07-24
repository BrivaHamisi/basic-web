<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement([
                'Student',
                'Alumnus',
                'Software Engineer',
                'Project Manager',
                'Research Assistant',
                'Lecturer',
                'Marketing Manager',
                'Business Owner',
                'Designer',
                'ICT Officer',
            ]),
            'photo' => null,
            'message' => fake()->paragraphs(rand(2, 4), true),
        ];
    }
}