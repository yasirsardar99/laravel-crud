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
        'email',
        'category'
    ];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }
}
