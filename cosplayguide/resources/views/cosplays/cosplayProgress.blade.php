@extends('master')


@section('title')
  <title>Progress cosplay {{ $cosplay->name }}</title>
@endsection


@section('content')


  <div class="row cosplay-progress">


    <div class="col">


      <div class="onderdelen left">


        <div class="onderdeel clearfix">

          <div class="float-right">
            <a href="/profiel/cosplay-overzicht/grime">
              <div class="overlay-grijs"></div>
              <img src="/img/onderdelen/grime.jpg" alt="grime">
            </a>
            <a class="onderdeel-title" href="/profiel/cosplay-overzicht/grime"><p>GRIME</p></a>
          </div>

        </div>

        <div class="onderdeel">
          <a href="/profiel/cosplay-overzicht/lenzen">
            <div class="overlay-grijs"></div>
            <img src="/img/onderdelen/lenzen.jpg" alt="lenzen">
          </a>
          <a class="onderdeel-title" href="/profiel/cosplay-overzicht/lenzen"><p>LENZEN</p></a>
        </div>

        <div class="onderdeel">
          <a href="/profiel/cosplay-overzicht/pruiken">
            <div class="overlay-grijs"></div>
            <img src="/img/onderdelen/pruiken.jpg" alt="pruik">
          </a>
          <a class="onderdeel-title" href="/profiel/cosplay-overzicht/pruiken"><p>PRUIK</p></a>
        </div>

      </div>


    </div>

    <div class="col-5">

      <form method="post" action="/profiel/cosplay-overzicht/{{ $cosplay->id }}" enctype="multipart/form-data">

          {{ csrf_field() }}


          <div class="form-group cosplayphoto-upload">
            <input class="inputfile" type="file" name="photo_url[]" id="photo_url" accept="image/*" data-multiple-caption="{count} files selected" onchange="this.form.submit();" multiple />
            <label for="photo_url">
              <img class="icon-camera-simple" src="/img/iconen/camera-full.svg" alt="camera">
            </label>
          </div>




          <div id="carouselCosplayphotos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

          @foreach ($cosplayphotos as $cosplayphoto)

              <div class="carousel-item @if ($photo_number == 1) active @endif">

                <img class="d-block" src="{{ asset('/storage/images/' . $cosplayphoto->photo_url) }}" alt="Foto {{ $cosplay->name }} cosplay {{ $photo_number++}}">
                <div class="carousel-caption d-none d-md-block">
                  <a href="{{ action('CosplayphotoController@delete', [$cosplayphoto->id]) }}"><img src="/img/iconen/trash-full.svg" alt="vuilbakje"></a>
                </div>


              </div>

          @endforeach

            </div>

            <a class="carousel-control-prev progress" href="#carouselCosplayphotos" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next progress" href="#carouselCosplayphotos" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>





          @if( $errors->any() )

              <ul class="alert alert-danger">

                @foreach( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach

              </ul>

          @endif

      </form>


      <div class="cosplay-name">
        <h2>{{ $cosplay->name }}</h2>
      </div>



      <ul class="status">

        <li><a class="lancering" href="{{ action('CosplayController@change_status', [$cosplay->id, "lancering"]) }}">

          <img @if ($cosplay->status == "lancering")
            class="active"
          @endif src="/img/social-icon.png" alt="lancering">
          <div class="sphere"></div>

        </a></li>



        <li><a class="shoppen" href="{{ action('CosplayController@change_status', [$cosplay->id, "shoppen"]) }}">

          <img @if ($cosplay->status == "shoppen")
            class="active"
          @endif src="/img/social-icon.png" alt="shoppen">
          <div class="sphere"></div>

        </a></li>



        <li><a class="knutselen" href="{{ action('CosplayController@change_status', [$cosplay->id, "knutselen"]) }}">

          <img @if ($cosplay->status == "knutselen")
            class="active"
          @endif src="/img/social-icon.png" alt="knutselen">
          <div class="sphere"></div>

        </a></li>



        <li><a class="verven" href="{{ action('CosplayController@change_status', [$cosplay->id, "verven"]) }}">

          <img @if ($cosplay->status == "verven")
            class="active"
          @endif src="/img/social-icon.png" alt="verven">
          <div class="sphere"></div>

        </a></li>



        <li><a class="icon-media" href="{{ action('CosplayController@change_status', [$cosplay->id, "media"]) }}">

          <img @if ($cosplay->status == "media")
          class="active"
          @endif src="/img/social-icon.png" alt="media">
          <div class="sphere"></div>

        </a></li>

      </ul>



    </div>



    <div class="col">


      <div class="onderdelen right">

        <div class="onderdeel">
          <a class="onderdeel-title" href="/profiel/cosplay-overzicht/armor"><p>ARMOR</p></a>
          <a href="/profiel/cosplay-overzicht/armor">
            <div class="overlay-grijs"></div>
            <img src="/img/onderdelen/armor.jpg" alt="armor">
          </a>
        </div>

        <div class="onderdeel">
          <a class="onderdeel-title" href="/profiel/cosplay-overzicht/voorwerpen"><p>VOORWERP</p></a>
          <a href="/profiel/cosplay-overzicht/voorwerpen">
            <div class="overlay-grijs"></div>
            <img src="/img/onderdelen/voorwerpen.jpg" alt="voorwerpen">
          </a>
        </div>


        <div class="onderdeel clearfix">

          <div class="float-right">
            <a class="onderdeel-title" href="/profiel/cosplay-overzicht/stoffen"><p>STOF</p></a>
            <a href="/profiel/cosplay-overzicht/stoffen">
              <div class="overlay-grijs"></div>
              <img src="/img/onderdelen/stoffen.jpg" alt="stof">
            </a>
          </div>

        </div>

      </div>

      <a class="button-yellow" href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug])}}">
        <img class="arrow right" src="/img/iconen/kort-pijltje-rechts-wit.png" alt="wit pijltje rechts">
        <p class="right">KLAAR!</p>
      </a>
    </div>

  </div>














@endsection
