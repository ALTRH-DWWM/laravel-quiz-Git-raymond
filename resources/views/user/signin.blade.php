{{view('layout.header')}}

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <form action="" method="post">
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
            <button type="submit">Se connecter</button>
        </p>
    </form>

{{view('layout.footer')}}