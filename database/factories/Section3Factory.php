<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section3>
 */
class Section3Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "s3_page_no" => $this->faker->word,
            "s3_revision_no" => $this->faker->randomNumber(),
            "s3_change_description" => $this->faker->paragraph,
            "s3_effective_date" => $this->faker->date,

        ];
    }
}
