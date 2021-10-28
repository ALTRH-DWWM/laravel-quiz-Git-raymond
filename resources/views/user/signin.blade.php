
{{view('layout.header')}}

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
        <button type="submit">Créer le compte</button>
    </p>
</form>

{{view('layout.footer')}}