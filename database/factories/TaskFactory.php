<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // sentence() or property / () can be a method if you want to configure the value or property
            'title'=>fake()->sentence,
            'description'=>fake()->paragraph,
            'long_description'=>fake()->paragraph(9,true),
            'completed' => fake()->boolean
            /* 
The paragraph method in Faker generates a paragraph of text, containing a given amount of sentences. The second parameter is a boolean that determines the format of the output:
If the second parameter is true, the method will return a string.
If the second parameter is false or not provided, the method will return an array.
 */
        ];
    }
}
