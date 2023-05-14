<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_courses extends Model
{
    use HasFactory;
    protected $table = 'student_courses';
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'student_id',
        'course_id',
    ];
}
