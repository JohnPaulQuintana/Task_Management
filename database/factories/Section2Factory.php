<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section2>
 */
class Section2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "s2_title"=>"DAILY MBC INSPECTION",
            "s2_document_number"=>"ISLA-OFR-OPS-01",
            "s2_department"=>"OPERATIONS",
            "s2_prepared_by"=>"DONALD M. AMOSIN",
            "s2_reviewed_by"=>"RAY VINCENT P. ENRIQUEZ",
            "s2_approved_by"=>"RAY VINCENT P. ENRIQUEZ",
        ];
    }
}
