@extends('master')


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
            <input class="inputfile" type="file" name="photo_url" id="photo_url" accept="image/*" data-multiple-caption="{count} files selected" multiple />
            <label for="photo_url"><span>Upload cosplay foto's</span></label>
          </div>


          <img class="img-fluid" src="/img/voorbeeld-cosplayphoto.jpg" alt="cosplay voorbeeld">

          <button class="button-yellow" type="submit" name="create" class="btn btn-primary">VOEG TOE</button>

          @if( $errors->any() )

              <ul class="alert alert-danger">

                @foreach( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach

              </ul>

          @endif


          <div>
            <h2>{{ $cosplay->name }}</h2>
            <p>{{ $cosplay->name_serie }}</p>
          </div>


      </form>
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







<!--

    @foreach ($cosplayphotos as $cosplayphoto)
        <img src="{{ asset('public/storage/images/' . $cosplayphoto->photo_url) }}" alt="{{ $cosplay->name }} cosplay">
        <a href="{{ action('CosplayphotoController@delete', [$cosplayphoto->id]) }}">Delete</a>
    @endforeach


    <form method="post" action="/profiel/cosplay-overzicht/{{ $cosplay->id }}" enctype="multipart/form-data">

        <div class="form-group">
            <input type="file" name="photo_url[]" id="cosplayphoto" multiple />
        </div>


        {{ csrf_field() }}

        <button type="submit" class="btn btn-primary">Creëer nieuwe foto's</button>



        @if( $errors->any() )


            <ul class="alert alert-danger">

              @foreach( $errors->all() as $error )
                  <li>{{ $error }}</li>
              @endforeach

            </ul>


        @endif

    </form>



    <div>
      <a href="/profiel/cosplay-overzicht/grime">Grime</a>
      <a href="/profiel/cosplay-overzicht/lenzen">Lenzen</a>
      <a href="/profiel/cosplay-overzicht/pruiken">Pruiken</a>
    </div>

    <div>
      <a href="/profiel/cosplay-overzicht/armor">Armor</a>
      <a href="/profiel/cosplay-overzicht/voorwerpen">Voorwerpen</a>
      <a href="/profiel/cosplay-overzicht/stoffen">Stoffen</a>
    </div>


    <div>
      <h2>{{ $cosplay->name }}</h2>
      <p>{{ $cosplay->name_serie }}</p>
    </div>


    <ul>
      <li @if ($cosplay->status == "lancering")
        class="font-weight-bold"
      @endif><a href="{{ action('CosplayController@change_status', [$cosplay->id, "lancering"]) }}">lancering</a></li>

      <li @if ($cosplay->status == "shoppen")
        class="font-weight-bold"
      @endif><a href="{{ action('CosplayController@change_status', [$cosplay->id, "shoppen"]) }}">shoppen</a></li>

      <li @if ($cosplay->status == "knutselen")
        class="font-weight-bold"
      @endif><a href="{{ action('CosplayController@change_status', [$cosplay->id, "knutselen"]) }}">knutselen</a></li>

      <li @if ($cosplay->status == "verven")
        class="font-weight-bold"
      @endif><a href="{{ action('CosplayController@change_status', [$cosplay->id, "verven"]) }}">verven</a></li>

      <li @if ($cosplay->status == "media")
        class="font-weight-bold"
      @endif><a href="{{ action('CosplayController@change_status', [$cosplay->id, "media"]) }}">media</a></li>
    </ul>


    <a href="{{ route('cosplay_edit', [$cosplay->id, $cosplay->slug])}} " class="btn btn-primary">Klaar!</a>
-->


@endsection
