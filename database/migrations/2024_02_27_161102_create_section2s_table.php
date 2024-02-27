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
        Schema::create('section2s', function (Blueprint $table) {
            $table->id();
            $table->string('s2_title');
            $table->string('s2_document_number');
            $table->string('s2_department');
            $table->string('s2_prepared_by');
            $table->string('s2_reviewed_by');
            $table->string('s2_approved_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section2s');
    }
};
