<?php
$levelClasses = [
    1 => 'beginner',
    2 => 'medium',
    3 => 'expert'
]
?>

{{view('layout.header')}}

<div>
    <h2>{{$quiz->title}}</h2>
    <h3>Score : {{$score}} / {{$quiz->questions->count()}}</h3>
</div>

@foreach($quiz->questions as $question)
<div class="row">
    <div class="col question">

        <span class="level level--{{$levelClasses[$question->level->id]}}">{{$question->level->name}}</span>

        <div class="question__question">
            {{$question->question}}
        </div>
        <div>
            <ol>
                @foreach($question->answers as $answer)
                    <?php $answerStatusClass = 'question__question__answer'; ?>
                    @if(!empty($submittedAnswerList[$question->id]))
                        <?php $submittedAnswerId = $submittedAnswerList[$question->id]; ?>
                        @if($submittedAnswerId == $answer->id && !$question->isGoodAnswer($submittedAnswerId))
                            <?php $answerStatusClass = 'question__question__answer--bad'; ?>
                        @endif
                    @endif

                    @if($question->isGoodAnswer($answer->id))
                        <?php $answerStatusClass = 'question__question__answer--good'; ?>
                    @endif

                <li class="{{$answerStatusClass}}">{{$answer->description}}</li>
                @endforeach
            </ol> 
        </div>
    </div>

    </div>
</div>
@endforeach

{{view('layout.footer')}}