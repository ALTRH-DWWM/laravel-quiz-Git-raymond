{{view('layout.header')}}

<h1>{{$tag->name}}</h1>

<div class="row">
    <ul>
        @foreach($tag->quizzes as $quiz)
        <div>
            <a href="{{route('quiz', ['id' => $quiz->id])}}">{{$quiz->title}}</a>
        </div>
        @endforeach
    </ul>
</div>

{{view('layout.footer')}}