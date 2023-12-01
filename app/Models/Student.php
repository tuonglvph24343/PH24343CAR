<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    const ACTIVE = 1;
    const INACTIVE = 0;
    protected $fillable = [
        'major_id',
        'code',
        'img',
        'is_active'
    ];
    public function major()
    {
        return $this->belongsTo(Majors::class);
    }
}
