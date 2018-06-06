@extends('master')


@section('content')


  <div class="row cosplay-profiel">
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
                  <h6><a href="{{ route('show_cosplay', [$cosplay->id, $cosplay->slug]) }}">{{ $cosplay->name }}</a></h6>
                  <a class="edit-link" href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug]) }}"><img class="edit-picture" src="/img/iconen/edit-full.svg" alt="Pas aan"></a>
                  <a class="delete-link" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}"><img class="delete-picture" src="/img/iconen/trash-full.svg" alt="Verwijder"></a>
                </div>


              @elseif ($cosplay->status == "new")
                <div class="col-4 cosplay">
                  <img class="img-fluid" src="/img/new-cosplay.png" alt="thumbnail nieuwe cosplay">
                  <a class="new-cosplay" href="/profiel/nieuwe-cosplay">Nieuwe cosplay</a>
                </div>


              @else
              <div class="col-4 cosplay">
                <img class="img-fluid desaturate" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
                <h6><a href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">IN PROGRESS</a></h6>
                <a class="delete-link" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}"><img class="delete-picture" src="/img/iconen/trash-full.svg" alt="Verwijder"></a>
              </div>
              @endif

            @endforeach

        </div>

      @endforeach




    </div>
  </div>





@endsection
