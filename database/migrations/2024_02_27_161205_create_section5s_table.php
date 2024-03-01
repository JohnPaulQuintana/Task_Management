<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('section5s', function (Blueprint $table) {
            $table->id();
            $table->longText('s5_equipment')->nullable();
            $table->longText('s5_site_location')->nullable();
            $table->longText('s5_work_order')->nullable();
            $table->longText('s5_date_performed')->nullable();
            $table->longText('s5_instruction')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section5s');
    }
};
