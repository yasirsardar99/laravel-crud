<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unistudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'section',
        'course',
        'email'
    ];
}
