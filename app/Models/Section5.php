<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section5 extends Model
{
    use HasFactory;
    protected $fillable = ['s5_equipment', 's5_site_location','s5_work_order','s5_date_performed','s5_instruction'];
}
