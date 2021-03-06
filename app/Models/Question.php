<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function getTimeDifferenceAttribute()
    {
        return time() - strtotime($this->created_at);
    }

    // public function getIsReleasedAttribute(): bool
    // {
    //     return $this->released_at ? true : false;
    // }
}
