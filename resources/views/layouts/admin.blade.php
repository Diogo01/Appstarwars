<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('assets/css/knacss.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-default navbar-static-top">@include('partials.nav-admin')</nav>
    </header>

    <div class="container">
        @yield('h1')

            @yield('content')

    </div>



    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
</html>