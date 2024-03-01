<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 1,
            'remember_token' => Str::random(10),
        ]);

        \App\Models\Section1::factory()->create([
            's1_section' => "GENERAL FORMS",
            's1_title' => "DOCUMENT REVISION HISTORY",
            's1_document_number' => "ISLA-GFR-DCC-30",
            's1_effective_date' => "30 APR 2023", 
            's1_revision_number' => 1,
            's1_page' => '1 of 1',
        ]);

        \App\Models\Section2::factory()->create([
            "s2_title"=>"DAILY MBC INSPECTION",
            "s2_document_number"=>"ISLA-OFR-OPS-01",
            "s2_department"=>"OPERATIONS",
            "s2_prepared_by"=>"DONALD M. AMOSIN",
            "s2_reviewed_by"=>"RAY VINCENT P. ENRIQUEZ",
            "s2_approved_by"=>"RAY VINCENT P. ENRIQUEZ",
        ]);

        \App\Models\Section3::factory()->create([
            "s3_page_no" => "All",
            "s3_revision_no" => "0",
            "s3_change_description" => "Initial Release",
            "s3_effective_date" => "15 Sep 2021",
        ]);
        
        \App\Models\Section3::factory()->create([
            "s3_page_no" => "All",
            "s3_revision_no" => "1",
            "s3_change_description" => "Revision of the following:
                                        Change document code and name from OPS-FM-01 to ISLA-OFR-OPS-01
                                        Realignment and to standardize official templates all across thermal and renewable plants",
            "s3_effective_date" => "20 Sep 2022",
        ]);

        \App\Models\Section4::factory()->create([
            "s4_section"=>"OPERATIONAL FORMS",
            "s4_title"=>"DAILY MCB INSPECTION",
            "s4_document_number"=>"ISLA-OFR-OPS-01",
            "s4_effective_date"=>"20 OCT 2022",
            "s4_revision_number"=>"1",
            "s4_page"=>"1 of 1",
        ]);

        \App\Models\Section5::factory()->create([
            "s5_equipment"=>"Main Control Building",
            "s5_site_location"=>"",
            "s5_work_order"=>"",
            "s5_date_performed"=>"",
            "s5_instruction"=>"Perform Daily maintenance of main control building offices based on the checklist below.
            Refer to ISLA-WIN-OPS-16 for the work instructions.",
        ]);
    }
}
