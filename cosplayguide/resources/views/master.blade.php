<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700|Titillium+Web:600,700" rel="stylesheet">

    <!-- FAVICON -->
    <!--<link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>-->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <script src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

  </head>


  <body>

    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <img class="footer-background" src="/img/footer.jpg" alt="Achtergrond bergen">

    @include('partials.footer')

  </body>
</html>
