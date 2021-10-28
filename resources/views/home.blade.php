{{view('layout.header')}}
            <div>
                <h2> Bienvenue sur Quiz </h2>
                <p>

                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                </p>
            </div>

            <div class="row">

            <ul>
                @foreach($quizList as $quiz)
                <div class="col">
                    <h3>{{$quiz->title}}</h3>
                    <h5>{{$quiz->description}}</h5>
                    <p>par {{$quiz->user->firstname}} {{$quiz->user->lastname}}</p>
                </div>
                @endforeach
            </ul>
                
            </div>
{{view('layout.footer')}}