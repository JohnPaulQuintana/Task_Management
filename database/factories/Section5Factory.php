<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section5>
 */
class Section5Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "s5_equipment"=>"Main Control Building",
            "s5_site_location"=>"",
            "s5_work_order"=>"",
            "s5_date_performed"=>"",
            "s5_instruction"=>"Perform Daily maintenance of main control building offices based on the checklist below.
            Refer to ISLA-WIN-OPS-16 for the work instructions.",
        ];
    }
}
