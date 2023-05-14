<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curses;

class professor extends Model
{
    use HasFactory;
//
    protected $table = 'professors';
//
    protected $primaryKey = 'id';
//    protected $fillable=['first-name','last-name','national-code'];

    use Notifiable;

    protected $fillable=['first-name','last-name','national-code'];



    public function courses()
    {
        return $this->hasMany(Curses::class);
    }
}
