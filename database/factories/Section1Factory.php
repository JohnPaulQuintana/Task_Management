<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section1>
 */
class Section1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            's1_section' => "GENERAL FORMS",
            's1_title' => "DOCUMENT REVISION HISTORY",
            's1_document_number' => "ISLA-GFR-DCC-30",
            's1_effective_date' => "30 APR 2023", 
            's1_revision_number' => 1,
            's1_page' => '1 of 1',
        ];
    }
}
