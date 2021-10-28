{{view('layout.header')}}

    <form action="" method="post">
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