<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['task_number', 'title', 'description', 'category', 'status'];
    // protected $fillable = ['task_number', 'title', 'description', 'status', 'category'];
}
