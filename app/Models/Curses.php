<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curses extends Model
{
    use HasFactory;

    protected $table = 'courses';
    use HasFactory;

    protected $primaryKey = 'id';
//    protected $fillable = ['name','id'];

    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

