<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section1 extends Model
{
    use HasFactory;

    protected $fillable = ['s1_section','s1_title','s1_document_number','s1_effective_date', 's1_revision_number','s1_page'];
}
