@extends('master')


@section('content')


  <div class="row">
    <div class="col-3">

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

      <div class="level">
        <div class="background-circle"></div>
        <div class="level-circle"></div>
        <!--<img class="background-circle" src="/img/level/level-basis-cirkel.png" alt="level cirkel">-->
        <img class="level-circle" src={{"/img/level/level-" . $user->level . ".png"}} alt="level {{ $user->level }}">
        <p class="level-title">{{ $user->level }}</p>
      </div>


    </div>





    <div class="col-9">


      @foreach ($cosplays->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $cosplay)

              @if ($cosplay->status == "completed")
                <div class="col-4 cosplay">
                  <img class="img-fluid" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
                  <h4><a href="{{ route('show_cosplay', [$cosplay->id, $cosplay->slug]) }}">{{ $cosplay->name }}</a></h4>
                  <a class="edit" href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug]) }}">Edit</a>
                  <a class="delete" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}">Delete</a>
                </div>


              @elseif ($cosplay->status == "new")
                <div class="col-4">
                  <a href="/profiel/nieuwe-cosplay">Nieuwe cosplay</a>
                </div>


              @else
              <div class="col-4 cosplay">
                <img class="img-fluid" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
                <h4><a href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">{{ $cosplay->name }} IN PROGRESS</a></h4>
                <a class="edit" href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">Edit</a>
                <a class="delete" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}">Delete</a>
              </div>
              @endif

            @endforeach

        </div>

      @endforeach




    </div>
  </div>





@endsection
