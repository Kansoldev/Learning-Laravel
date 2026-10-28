<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
            Calling the factory of the Employer model tells Laravel that whenever I run the
            factory of the Job Model, it should also run the factory of the Employer model.
            The factory of the Employer model creates a new Employer record, and generates a
            unique ID which will be used as the value for `employer_id`.
        */
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$40,000'
        ];
    }
}
