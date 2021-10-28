<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class MainController extends Controller
{
    public function homeAction()
    {
        $quizList = Quiz::all();

        return view('home', compact(['quizList']));
    }
}
