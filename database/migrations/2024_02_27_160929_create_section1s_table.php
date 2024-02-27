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
        Schema::create('section1s', function (Blueprint $table) {
            $table->id();
            $table->string('s1_section');
            $table->string('s1_title')->nullable();
            $table->string('s1_document_number')->nullable();
            $table->string('s1_effective_date')->nullable();
            $table->string('s1_revision_number');
            $table->string('s1_page');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section1s');
    }
};
