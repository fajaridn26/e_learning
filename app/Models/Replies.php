<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $fillable = ['discussion_id', 'user_id', 'content'];

    public function discussion()
    {
        return $this->belongsTo(Discussions::class, 'discussion_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
