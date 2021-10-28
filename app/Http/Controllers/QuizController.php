<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function quizAction($id)
    {
        $quiz = Quiz::find($id);

        return view('quiz', compact('quiz'));
    }
}
