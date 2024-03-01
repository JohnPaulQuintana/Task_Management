<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTask extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "task_id",
        "s4_title",
        "s4_document_number",
        "s6_conference_1",
        "s6_conference_2",
        "s6_conference_3",
        "s6_pantry_1",
        "s6_pantry_2",
        "s6_pantry_3",
        "s6_admin_1",
        "s6_admin_2",
        "s6_admin_3",
        "s6_manager_1",
        "s6_manager_2",
        "s6_manager_3",
        "s6_comfort_1",
        "s6_comfort_2",
        "s6_comfort_3",
        "s6_storage_1",
        "s6_storage_2",
        "s6_storage_3",
        "s6_hallway_1",
        "s6_hallway_2",
        "s6_hallway_3",
        "s6_control_1",
        "s6_control_2",
        "s6_control_3",
        "s6_exterior_1",
        "s6_exterior_2",
        "s6_exterior_3",
        "s6_performed_name",
        "s6_performed_designation",
        "s6_performed_date",
        "s6_verified_name",
        "s6_verified_designation",
        "s6_verified_date",
        "s6_approved_name",
        "s6_approved_designation",
        "s6_approved_date",
    ];
}
