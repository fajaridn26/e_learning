<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'lecturer_id'];
    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id');
    }
}
