<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section2 extends Model
{
    use HasFactory;
    protected $fillable = ['s2_title', 's2_document_number','s2_department','s2_prepared_by','s2_reviewed_by','s2_approved_by'];
}
