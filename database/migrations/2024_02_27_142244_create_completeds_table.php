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
        Schema::create('completeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pdf_id');
            $table->unsignedBigInteger('user_is');
            $table->text('completed_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completeds');
    }
};
