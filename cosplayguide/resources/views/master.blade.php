<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121069140-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121069140-1');
    </script>

    <!-- End Google Analytics -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    @yield('description')

    @yield('follow')

    <meta property="og:url"           content={{Request::url()}} />
    @yield('og')
    <meta property="og:type"          content="website" />
    <meta property="og:image"         content="https://cosplayguide.be/img/howling-banshee.jpg" />


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:600,700" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('public/img/favicon.png') }}"/>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- JS DEFER -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/share.js') }}" defer></script>

  </head>


  <body>

    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <img @yield('footer-image') src="/img/footer-earth.jpg" alt="Achtergrond bergen">

    @include('partials.footer')

  </body>
</html>
