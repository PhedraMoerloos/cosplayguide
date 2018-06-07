@extends('master')


@section('content')


  <div class="row cosplay-profiel">
    <div class="col-3 profiel-info">



      <div class="profiel">


        <div class="row justify-content-end">

            <div class="col-4">
              <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <img class="more-icon" src="/img/iconen/more-full-lichter.svg" alt="toon meer">
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

        </div>

        <p class="profile-title">PROFIEL</p>
        <img class="profile-picture-large" src="{{ asset('/storage/images/' . $user->profile_picture_url) }}" alt="profile picture {{ $user->username }}">

        <h1>{{ $user->username }}</h1>
        <p class="small-grey-italic">{{ $user->description }}</p>

      </div>



      <div class="level-info">


        <div class="row justify-content-center">

          <div class="col-4">
            <div class="progress-circle"></div>
            <p>IN PROGRESS</p>
            <p class="progress-number">{{ $number_of_cosplays_in_progress }}</p>
          </div>

          <div class="col-4">
            <div class="completed-circle"></div>
            <p>COMPLETED</p>
            <p class="progress-number">{{ $number_of_completed_cosplays }}</p>
          </div>

        </div>



        <div class="level">
          <div class="background-circle"></div>
          <img class="level-circle" src={{"/img/level/level-" . $user->level . ".png"}} alt="level {{ $user->level }}">
          <p class="level-title">{{ $user->level }}</p>
        </div>

      </div>


    </div>





    <div class="col-9">

      <div class="row">
      @foreach ($cosplays->chunk(3) as $chunk)

            @foreach ($chunk as $cosplay)

              @if ($cosplay->status == "completed")
                <div class="col-4 cosplay">

                  <a class="cosplay-hover-link" href="#"><img class="img-fluid" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} "></a>

                  <div class="cosplay-hover">
                    <img class="cosplay-overlay" src="/img/cosplay-overlay.png">
                    <a class="thumbnail-title" href="{{ route('show_cosplay', [$cosplay->id, $cosplay->slug]) }}">{{ $cosplay->name }}</a>
                    <a class="edit-link" href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug]) }}"><img class="edit-picture" src="/img/iconen/edit-full.svg" alt="Pas aan"></a>
                    <a class="delete-link" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}"><img class="delete-picture" src="/img/iconen/trash-full.svg" alt="Verwijder"></a>
                  </div>

                </div>


              @elseif ($cosplay->status == "new")
                <div class="col-4 cosplay">
                  <img class="img-fluid" src="/img/new-cosplay.png">
                  <a class="new-cosplay" href="/profiel/nieuwe-cosplay">Nieuwe cosplay</a>
                </div>


              @else
              <div class="col-4 cosplay">
                <a class="cosplay-hover-link" href="#"><img class="img-fluid desaturate" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} "></a>

                <div class="cosplay-hover">
                  <img class="cosplay-overlay" src="/img/cosplay-overlay.png">
                  <a class="thumbnail-title" href="{{ route('show_progress', [$cosplay->id, $cosplay->slug])}}">IN PROGRESS</a>
                  <a class="delete-link" href="{{ action('CosplayController@destroy', [$cosplay->id]) }}"><img class="delete-picture" src="/img/iconen/trash-full.svg" alt="Verwijder"></a>
                </div>

              </div>
              @endif

            @endforeach



      @endforeach
      </div>



    </div>
  </div>





@endsection
