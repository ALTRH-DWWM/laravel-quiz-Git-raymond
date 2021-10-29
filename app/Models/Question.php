<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany('App\\Models\\Answer', 'questions_id');
    }

    public function level()
    {
        return $this->belongsTo('App\\Models\\Level', 'levels_id');
    }

    public function goodAnswer()
    {
        return $this->belongsTo('App\\Models\\Answer', 'answers_id');
    }

    public function isGoodAnswer($answerId)
    {
        return $this->goodAnswer->id == $answerId;
    }
}
