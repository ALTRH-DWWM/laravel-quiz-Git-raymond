<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function tagsAction()
    {
        $tagList = Tag::all();

        return view('tag.list', compact('tagList'));
    }

    public function quizzesAction($tagId)
    {
        $tag = Tag::find($tagId);

        return view('tag.quizzes', compact('tag'));
    }
}
