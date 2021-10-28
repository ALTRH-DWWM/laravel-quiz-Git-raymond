<?php
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
]
?>

{{view('layout.header')}}

            <div>
                <h2>{{$quiz->title}}
                    <span>{{$quiz->questions->count()}} questions</span>
                </h2>
            </div>

            <div>
                @foreach($quiz->tags as $tag)
                <a class="badge badge-primary" href="{{route('tag_quizzes', ['tagId' => $tag->id])}}">
                    <span class="badge badge-primary">{{$tag->name}}</span>
                </a>
                @endforeach
            </div>

            <div>
                <h4> 
                    {{$quiz->description}}
                </h4>
            </div>

            <div>
                <p>par {{$quiz->user->firstname}} {{$quiz->user->lastname}}</p>
            </div>

            <div class="row">
                @foreach($quiz->questions as $question)
                <div class="col question">

                    <span class="level level--{{$levelClasses[$question->level->id]}}">{{$question->level->name}}</span>

                    <div class="question__question">
                        {{$question->question}}
                    </div>
                    <div>
                        <ol>
                            @foreach($question->answers as $answer)
                            <li>{{$answer->description}}</li>
                            @endforeach
                        </ol> 
                    </div>
                </div>

                </div>
            @endforeach
            </div>

{{view('layout.footer')}}