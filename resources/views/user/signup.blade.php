{{view('layout.header')}}

    @if(session('failed'))
    <div class="alert alert-warning" role="alert">
        {{session('failed')}}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif

    <form action="{{route('signup_post')}}" method="post">
        @csrf
        <p>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
        </p>
        <p>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </p>
        <p>
            <button type="submit">Créer le compte</button>
        </p>
    </form>

{{view('layout.footer')}}