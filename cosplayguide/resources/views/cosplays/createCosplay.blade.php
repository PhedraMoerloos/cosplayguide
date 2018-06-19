@extends('master')


@section('title')
  <title>Nieuwe cosplay</title>
@endsection

@section('follow')
  <meta name="robots" content="noindex, nofollow" />
@endsection


@section('content')

    <div class="row nieuw">


      <div class="col">

        <a class="button-yellow back-profiel" href="/profiel">
          <img class="arrow left" src="/img/iconen/kort-pijltje-links-wit.png" alt="wit pijltje links">
          <p class="left">PROFIEL</p>
        </a>

      </div>

      <div class="col-5 create-cosplay">
        <form method="post" action="/profiel/nieuwe-cosplay" enctype="multipart/form-data">

            {{ csrf_field() }}


            <div class="cosplay-voorbeeld">

              <img class="img-fluid" src="/img/voorbeeld-cosplayphoto.jpg" alt="cosplay voorbeeld">

              <div class="form-group">
                <input class="inputfile" type="file" name="photo_url" id="photo_url" accept="image/*" data-multiple-caption="{count} files selected" />
                <label for="photo_url"><span>Upload jouw voorbeeld</span></label>
                <p>Min 500 x 600 px</p>
              </div>

            </div>



            <div class="form-group name">
                <input type="text" class="form-control" id="name" name="name" placeholder="PERSONAGE NAAM" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="name_serie" name="name_serie" placeholder="SERIE/FILM" required>
            </div>


            <button class="button-yellow create" type="submit" name="create">
              <h1>CREËR</h1>
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

      <div class="col"></div>

    </div>


@endsection


@section('footer-image')
  class="footer-background up"
@endsection
