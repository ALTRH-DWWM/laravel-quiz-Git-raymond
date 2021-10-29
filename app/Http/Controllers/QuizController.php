<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quiz;

use App\Utils\UserSession;

Class QuizController extends Controller
{
    public function quizAction($id)
    {
        $quiz = Quiz::find($id);

        $view = 'quiz';

        if(UserSession::isConnected()) {
            $view = 'quiz.quizForm';
        }

        return view($view, compact('quiz'));
    }

    public function quizPostAction($id, Request $request)
    {
        if(UserSession::isConnected()) {
            $quiz = Quiz::find($id);

            $score = 0;

            $submittedAnswerList = $request->input('answers');

            foreach ($quiz->questions as $question) {
                if(isset($submittedAnswerList[$question->id])) {
                    $submittedAnswerId = $submittedAnswerList[$question->id];
                }

                if($question->isGoodAnswer($submittedAnswerId)) {
                    $score += 1;
                }
            }

            return view('quiz.score', compact(['quiz'], ['submittedAnswerList'], 'score'));
        } else {
            return redirect()->route('quiz', ['id' => $id]);
        }
    }
}
