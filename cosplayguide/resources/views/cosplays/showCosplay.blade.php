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



        <div class="cosplay-niveau">

          @if ($cosplay->status == "completed")

            <div class="row cosplay-niveau-rij">

              <div class="col-6">
                <p>Budget</p>
                <p>€{{ $cosplay->euros_spent }}</p>
              </div>

              <div class="col-6">

                <p>Tijd</p>
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


          </div>



          <div class="share-block">

            <h2 class="share">Share</h2>

            <ul class="social-footer social-cosplay">
              <li><a href="https://www.facebook.com/cosplayguide/" target="_blank"><img class="social-facebook" src="/img/social-icon.png" alt="Facebook icoon"></a></li>
              <li><a href="#" target="_blank"><img class="social-twitter" src="/img/social-icon.png" alt="Twitter icoon"></a></li>
              <li><a href="#" target="_blank"><img class="social-pinterest" src="/img/social-icon.png" alt="Pinterest icoon"></a></li>
            </ul>

          </div>






    </div><!-- einde col3 -->



    <div class="col-9">


      <div id="carouselCosplayphotos" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

      @foreach ($cosplayphotos as $cosplayphoto)

          <div class="carousel-item @if ($photo_number == 1) active @endif">

            <img class="d-block" src="{{ asset('/storage/images/' . $cosplayphoto->photo_url) }}" alt="Foto {{ $cosplay->name }} cosplay {{ $photo_number}}">
            <!--<div class="carousel-caption d-none d-md-block">
              <p>{{ $photo_number++}} of {{ $cosplayphotos->count() }}</p>
            </div>-->

          </div>

      @endforeach

        </div>

        <a class="carousel-control-prev" href="#carouselCosplayphotos" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselCosplayphotos" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>


    </div><!-- einde col9 -->


  </div><!-- einde row -->

  <div class="project-description">

    <div class="project-description-info clearfix">
      <a class="profile-link profile-description float-left" href="/profiel"><img class="profile-picture" src="{{ asset('/storage/images/' . $cosplay_creator->profile_picture_url) }}" alt="profile picture {{ $cosplay_creator->username }}"></a>
      <h2 class="float-left">{{ $cosplay_creator->username }}</h2>
      <p class="float-left">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($cosplay->published_at))->format('d/m/Y') }}</p>
    </div>

    <p class="project-description-content">{{ $cosplay->project_description }}</p>

  </div>
@endif





@endsection
