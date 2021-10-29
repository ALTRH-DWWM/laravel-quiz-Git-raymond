{{view('layout.header')}}

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    @if(session('failed'))
    <div class="alert alert-danger" role="alert">
        {{session('failed')}}
    </div>
    @endif

    <form action="{{route('signin_post')}}" method="post">
        @csrf
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