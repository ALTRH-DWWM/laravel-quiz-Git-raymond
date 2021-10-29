<?php
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
];
?>

{{view('layout.header')}}

            <div>
                <h2>{{$quiz->title}}
                    <span>{{$quiz->questions->count()}} questions</span>
                </h2>
            </div>

            <div>
                <h4> 
                    {{$quiz->description}}
                </h4>
            </div>

            <div>
                <p>par {{$quiz->user->firstname}} {{$quiz->user->lastname}}</p>
            </div>

            <form action="{{route('quiz_post', ['id' => $quiz->id])}}" method="post">
                @csrf
                <div class="row">
                    @foreach($quiz->questions as $question)
                    <div class="col question">

                        <span class="level level--{{$levelClasses[$question->level->id]}}">{{$question->level->name}}</span>

                        <div class="question__question">
                            {{$question->question}}
                        </div>

                        <div class="question__choices">
                            @foreach($question->answers as $answer)
                            <div>
                                <input type="radio" name="answers[{{$question->id}}]" id="{{$question->id.$answer->id}}" value="{{ $answer->id }}">
                                <label for="{{$question->id.$answer->id}}">
                                        {{$answer->description}} 
                                </label> 
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    <input class="btn" type="submit" value="OK"/>
                </div>
            </form>

{{view('layout.footer')}}