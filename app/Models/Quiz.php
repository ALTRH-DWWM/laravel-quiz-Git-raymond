<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';

    public function user()
    {
        return $this->belongsTo('App\\Models\\User', 'app_users_id');
    }
}
