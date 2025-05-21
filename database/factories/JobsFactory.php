<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement([
                '£10,000 - £40,000',
                '£40,001 - £80,000',
                '£80,001 - £120,000',
                '£120,001 - £160,000',
                '£160,001 - £200,000',
                '£200,001 - £240,000',
            ]),
            'location' => fake()->city(),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
        ];
    }
}
