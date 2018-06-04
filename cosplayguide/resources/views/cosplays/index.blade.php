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


    <img src="{{ asset('/storage/images/' . $user->profile_picture_url) }}" alt="profile picture {{ $user->username }}">

    <h1>{{ $user->username }}</h1>

    <p>{{ $user->description }}</p>


    <p>number of completed cosplays: {{ $number_of_completed_cosplays }}</p>
    <p>number of cosplays in progress: {{ $number_of_cosplays_in_progress }}</p>
    <p>level: {{ $user->level }}</p>

    <img src="/img/level/level-basis-cirkel.png" alt="level cirkel">
    <img src={{"/img/level/level-" . $user->level . ".png"}} alt="level {{ $user->level }}">





    @foreach ($cosplays as $cosplay)

      @if ($cosplay->status == "completed")
        <div>
          <h2><a href="{{ route('show_cosplay', [$cosplay->id, $cosplay->slug]) }}">{{ $cosplay->name }}</a></h2>
          <img src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
          <a href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug]) }}">Edit</a>
          <a href="{{ action('CosplayController@destroy', [$cosplay->id]) }}">Delete</a>
        </div>


      @else
      <div>
        <h2><a href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">{{ $cosplay->name }} IN PROGRESS</a></h2>
        <img src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
        <a href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">Edit</a>
        <a href="{{ action('CosplayController@destroy', [$cosplay->id]) }}">Delete</a>
      </div>
      @endif

    @endforeach

    <a href="/profiel/nieuwe-cosplay">Nieuwe cosplay</a>



@endsection
