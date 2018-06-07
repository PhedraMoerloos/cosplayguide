@extends('master')


@section('content')


  <div class="row cosplay-show">

    <div class="col-3 cosplay-info">


        <div class="row justify-content-end">
          <div class="col-3">
            @if ($user_logged_in)

              @if ($cosplay->status == "completed")

                <a class="edit-icon" href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug]) }}"><img class="more-icon" src="/img/iconen/edit-full-dark.svg" alt="pas aan"></a>

              @else
                <a class="edit-icon" href="{{ route('show_progress', [$cosplay->id, $cosplay->slug]) }}"><img class="more-icon" src="/img/iconen/edit-full-dark.svg" alt="pas aan"></a>

              @endif

            @endif
        </div>
      </div>


        <img class="profile-picture-large" src="{{ asset('/storage/images/' . $cosplay_creator->profile_picture_url) }}" alt="profile picture {{ $cosplay_creator->username }}">
        <h1 class="small-grey-italic username-cosplay">{{ $cosplay_creator->username }}</h1>

        <div class="cosplay-names">
          <h2>{{ $cosplay->name }}</h2>
          <p>From: {{ $cosplay->name_serie }}</p>
        </div>



        @if ($cosplay->status == "completed")




          <div class="row cosplay-niveau-rij">

            <div class="col-6">
              <p>Amount spent</p>
              <p>€{{ $cosplay->euros_spent }}</p>
            </div>

            <div class="col-6">

              <p>Time spent</p>
              <p>{{ $cosplay->months_spent }} maanden</p>
            </div>

          </div>



          <div class="row cosplay-niveau-rij">

            <div class="col-6">
                <p>Moeilijkheid</p>
                <p>{{ $cosplay->difficulty }}</p>
            </div>

            <div class="col-6">
              <p>Zelfstandigheid</p>
              <p>{{ $cosplay->independence_percentage }} %</p>
            </div>

          </div>



          <div class="share-block">

            <h2 class="share">Share</h2>

            <ul class="social-footer social-cosplay">
              <li><a href="https://www.facebook.com/cosplayguide/" target="_blank"><img class="social-facebook" src="/img/social-icon.png" alt="Facebook icoon"></a></li>
              <li><a href="#" target="_blank"><img class="social-instagram" src="/img/social-icon.png" alt="Instagram icoon"></a></li>
              <li><a href="#" target="_blank"><img class="social-pinterest" src="/img/social-icon.png" alt="Pinterest icoon"></a></li>
            </ul>

          </div>






    </div><!-- einde col3 -->



    <div class="col-9">


      @foreach ($cosplayphotos as $cosplayphoto)
          <p>{{ $photo_number }} of {{ count($cosplayphotos) }}</p>
          <img src="{{ asset('/storage/images/' . $cosplayphoto->photo_url) }}" alt="Foto {{ $cosplay->name }} cosplay {{ $photo_number++ }}">
      @endforeach


    </div><!-- einde col9 -->

  </div><!-- einde row -->

  <div class="project-description">

    <div class="project-description-info clearfix">
      <a class="profile-link profile-description float-left" href="/profiel"><img class="profile-picture" src="{{ asset('/storage/images/' . Auth::user()->profile_picture_url) }}" alt="profiel foto {{ Auth::user()->username }}"></a>
      <h2 class="float-left">{{ $cosplay_creator->username }}</h2>
      <p class="float-left">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($cosplay->published_at))->format('d/m/Y') }}</p>
    </div>

    <p class="project-description-content">{{ $cosplay->project_description }}</p>

  </div>
@endif





@endsection
