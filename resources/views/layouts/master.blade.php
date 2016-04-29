<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'AppStarWars')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/knacss.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top">@include('partials.nav')</nav>
        </header>
        <div class="container">
           @yield('h1')
            <div class="row">
                 <div class="col-md-12">
                          @yield('content')
                </div>
               
        </div>

            <div class="sidebar">@yield('sidebar')</div>

        </div>
        <footer></footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="{{ asset('assets/js/app.min.js') }}"></script>
    </body>
</html>