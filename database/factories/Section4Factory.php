<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section4>
 */
class Section4Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "s4_section"=>"OPERATIONAL FORMS",
            "s4_title"=>"DAILY MCB INSPECTION",
            "s4_document_number"=>"ISLA-OFR-OPS-01",
            "s4_effective_date"=>"20 OCT 2022",
            "s4_revision_number"=>"1",
            "s4_page"=>"1 of 1",
        ];
    }
}
