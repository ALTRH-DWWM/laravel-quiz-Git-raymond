<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Bootsrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Reset CSS -->
        <link href="{{ URL::asset('/') }}css/reset.css"  rel="stylesheet">

        <!-- Really beautiful CSS -->
        <link href="{{ URL::asset('/') }}css/style.css"  rel="stylesheet">

        <title>Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>
                    <li>
                        <a href="#">
                        <h1>Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="{{route('signup')}}">
                            <i></i>
                            Inscription
                        </a>
                    </li>

                    <li>
                        <a href="{{route('signin')}}">
                            <i></i>
                            Connexion
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Mon compte
                        </a>
                    </li>

                    <li>
                        <a href="{{route('tags')}}">
                            <i></i>
                            Les sujets
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Déconnexion
                        </a>
                    </li>

                </ul>
            </nav>
            