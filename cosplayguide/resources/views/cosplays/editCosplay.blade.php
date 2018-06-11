@extends('master')


@section('title')
  <title>Info {{ $cosplay->name }}</title>
@endsection


@section('content')


  <div class="row cosplay-progress">

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


      </form>
    </div>




    <div class="col-7 form-cosplay">

      <div class="titel">
        <h1 class="klein">NOG WAT INFO</h1>
        <div class="titels-underline small"></div>
      </div>




      <form class="edit-cosplay" method="post" action="/profiel/cosplay-info/update/{{ $cosplay->id }}" enctype="multipart/form-data">


          {{ csrf_field() }}


          <div class="row">


            <div class="col-4">
              <div class="form-group">
                  <label for="name">Naam</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Naam personage" value="{{ $cosplay->name }}" required>
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                  <label for="name_serie">Serie</label>
                  <input type="text" class="form-control" id="name_serie" name="name_serie" placeholder="Naam serie/film" value="{{ $cosplay->name_serie }}" required>
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                  <input type="file" name="thumbnail_url">
              </div>

              <div>
                <img class="img-fluid" src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
              </div>
            </div>


          </div>





          <div class="row">


            <div class="col-4">
              <div class="form-group">
                  <label for="difficulty">Moeilijkheidsgraad</label>
                  <select name="difficulty" size="3" required>
                      <option value="Gemakkelijk">Gemakkelijk</option>
                      <option value="Gemiddeld">Gemiddeld</option>
                      <option value="Moeilijk">Moeilijk</option>
                  </select>
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                  <label for="independence_percentage">Zelfstandigheid</label>
                  <input type="number" class="form-control" id="independence_percentage" name="independence_percentage" placeholder=50 value="{{ $cosplay->independence_percentage }}" required>%
              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                  <label for="months_spent">Gespendeerde tijd</label>
                  <input type="number" class="form-control" id="months_spent" name="months_spent" placeholder=2 value="{{ $cosplay->months_spent }}" required>maanden
              </div>
            </div>


          </div>




          <div class="form-group">
              <label for="euros_spent">Gespendeerd budget</label>
              <input type="number" class="form-control" id="euros_spent" name="euros_spent" placeholder=100 value="{{ $cosplay->euros_spent }}" required> euros <span>geschat*</span>
          </div>


          <div class="form-group">
              <label for="project_description">Project beschrijving</label>
              <input type="text" class="form-control" id="project_description" name="project_description" placeholder="Verloop van het cosplayproces, gebruikte materialen (lenzen, pruiken,..)" value="{{ $cosplay->project_description }}" required>
          </div>


          <button type="submit" class="button-yellow">
            <img class="arrow right" src="/img/iconen/kort-pijltje-rechts-wit.png" alt="wit pijltje rechts">
            <p class="right">PUBLICEER</p>
          </button>


          @if( $errors->any() )


              <ul class="alert alert-danger">

                @foreach( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach

              </ul>


          @endif

      </form>

    </div>


  </div>

@endsection
