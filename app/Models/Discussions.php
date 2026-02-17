<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    protected $fillable = ['course_id', 'user_id', 'content'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Replies::class, 'discussion_id');
    }
}
