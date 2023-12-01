<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    const ACTIVE = 1; // HOẠT ĐỘNG
    const INACTIVE = 0; // KHÔNG HOẠT ĐỘNG
    protected $fillable = [
        'name',
        'brand',
        'img',
        'is_active',
        'describe',
    ];
}
