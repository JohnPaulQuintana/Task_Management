<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section4 extends Model
{
    use HasFactory;

    protected $fillable = ['s4_section','s4_title','s4_document_number','s4_effective_date','s4_revision_number','s4_page'];
}
