<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['course_id', 'title', 'file_path'];
    
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
