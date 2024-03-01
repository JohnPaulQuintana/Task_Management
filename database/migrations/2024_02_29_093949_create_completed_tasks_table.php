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
        Schema::create('completed_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('task_id');
            $table->text('s4_title');
            $table->text('s4_document_number');
            $table->string('s6_conference_1')->default('off');
            $table->string('s6_conference_2')->default('off');
            $table->longText('s6_conference_3')->nullable();

            $table->string('s6_pantry_1')->default('off');
            $table->string('s6_pantry_2')->default('off');
            $table->longText('s6_pantry_3')->nullable();

            $table->string('s6_admin_1')->default('off');
            $table->string('s6_admin_2')->default('off');
            $table->longText('s6_admin_3')->nullable();

            $table->string('s6_manager_1')->default('off');
            $table->string('s6_manager_2')->default('off');
            $table->longText('s6_manager_3')->nullable();

            $table->string('s6_comfort_1')->default('off');
            $table->string('s6_comfort_2')->default('off');
            $table->longText('s6_comfort_3')->nullable();

            $table->string('s6_storage_1')->default('off');
            $table->string('s6_storage_2')->default('off');
            $table->longText('s6_storage_3')->nullable();

            $table->string('s6_hallway_1')->default('off');
            $table->string('s6_hallway_2')->default('off');
            $table->longText('s6_hallway_3')->nullable();

            $table->string('s6_control_1')->default('off');
            $table->string('s6_control_2')->default('off');
            $table->longText('s6_control_3')->nullable();

            $table->string('s6_exterior_1')->default('off');
            $table->string('s6_exterior_2')->default('off');
            $table->longText('s6_exterior_3')->nullable();

            $table->longText('s6_performed_name')->nullable();
            $table->longText('s6_performed_designation')->nullable();
            $table->longText('s6_performed_date')->nullable();

            $table->longText('s6_verified_name')->nullable();
            $table->longText('s6_verified_designation')->nullable();
            $table->longText('s6_verified_date')->nullable();

            $table->longText('s6_approved_name')->nullable();
            $table->longText('s6_approved_designation')->nullable();
            $table->longText('s6_approved_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_tasks');
    }
};
