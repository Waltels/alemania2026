<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $fillable = ['nombre'];    
/** @use HasFactory<\Database\Factories\GradoFactory> */
    use HasFactory;
}
