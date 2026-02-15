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

    public function students()
    {
        return $this->belongsToMany(User::class, 'course_students', 'course_id', 'student_id')->withTimestamps();
    }

    public function material()
    {
        return $this->hasMany(Material::class, 'course_id');
    }
}
