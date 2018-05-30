@extends('master')


@section('content')




    <div>
        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            . . .
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/profiel/edit">Edit profiel</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>


    <img src="{{ $user->profile_picture_url }}" alt="profile picture {{ $user->username }}">

    <h1>{{ $user->username }}</h1>

    <p>{{ $user->description }}</p>


    <p>number of completed cosplays: {{ $number_of_completed_cosplays }}</p>
    <p>number of cosplays in progress: {{ $number_of_cosplays_in_progress }}</p>
    <p>level: {{ $user->level }}</p>



    @foreach ($cosplays as $cosplay)

      @if ($cosplay->status == "completed")
        <div>
          <h2><a href={{"/profiel/cosplays/". $cosplay->id}}>{{ $cosplay->name }} completed</a></h2>
          <img src="{{ $cosplay->thumbnail_url }}" alt="thumbnail {{ $cosplay->name }} ">
        </div>


      @else
      <div>
        <h2><a href={{"/profiel/cosplay-overzicht/". $cosplay->id}}>{{ $cosplay->name }}</a></h2>
        <img src="{{ $cosplay->thumbnail_url }}" alt="thumbnail {{ $cosplay->name }} ">
      </div>
      @endif

    @endforeach

    <a href="/profiel/nieuwe-cosplay">Nieuwe cosplay</a>



@endsection
