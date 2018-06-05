<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container padding-top-3em" @guest style="padding-top: 3.25em" @endguest>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo-kleur" src="/img/logo-kleur.png" alt="logo {{ config('app.name', 'Laravel') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-top" @guest style="margin-top: 0" @endguest>
              <li><a class="nav-link" href="/over-cosplay">OVER COSPLAY</a></li>
              <li><a class="nav-link" href="/tips-en-tricks">TIPS & TRICKS</a></li>
              <li><a class="nav-link" href="/contact">CONTACT</a></li>
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
          @else
              <li class="profile-link"><a class="nav-link" href="/profiel"><img class="profile-picture" src="{{ asset('/storage/images/' . Auth::user()->profile_picture_url) }}" alt="profiel foto {{ Auth::user()->username }}"></a></li>
          @endguest
            </ul>

        </div>
    </div>
</nav>
