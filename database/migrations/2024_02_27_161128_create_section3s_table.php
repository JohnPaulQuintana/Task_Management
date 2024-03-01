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
        Schema::create('section3s', function (Blueprint $table) {
            $table->id();
            $table->string('s3_page_no');
            $table->string('s3_revision_no');
            $table->longText('s3_change_description');
            $table->string('s3_effective_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section3s');
    }
};
