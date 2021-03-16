<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="{{route('pokemon.create')}}">Créer un pokemon <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="{{route('type.create')}}">Créer un type</a>
                    <a class="nav-link" href="/liste">Liste de pokemon</a>
                </div>
            </div>
        </nav>
    </header>

    <section>
        @yield('content')
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
