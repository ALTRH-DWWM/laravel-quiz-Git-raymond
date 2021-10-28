{{view('layout.header')}}

<div class="row">
    @foreach($tagList as $tag)
    <div class="col-3">
        <a class="badge badge-primary" href="{{route('tag_quizzes', ['tagId' => $tag->id])}}">{{$tag->name}}</a>
    </div>
    @endforeach
</div>

{{view('layout.footer')}}