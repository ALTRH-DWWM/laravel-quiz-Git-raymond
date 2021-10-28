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

    public function questions()
    {
        return $this->hasMany('App\\Models\\Question', 'quizzes_id');
    }

    public function tags()
    {
        return $this->belongsToMany(
            'App\\Models\\Tag',
            'quizzes_has_tags',
            'quizzes_id',
            'tags_id'
        );
    }
}