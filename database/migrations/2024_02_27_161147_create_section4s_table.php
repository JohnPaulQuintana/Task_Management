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
        Schema::create('section4s', function (Blueprint $table) {
            $table->id();
            $table->string('s4_section');
            $table->string('s4_title')->nullable();
            $table->string('s4_document_number')->nullable();
            $table->string('s4_effective_date');
            $table->string('s4_revision_number');
            $table->string('s4_page');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section4s');
    }
};
