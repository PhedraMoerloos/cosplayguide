@extends('master')

@section('title')
  <title>Nieuwe cosplay</title>
@endsection


@section('content')

    <div class="row">

      <div class="col">

        <a class="button-yellow" href="/profiel">
          <img class="arrow left" src="/img/iconen/pijltje-links-wit.png" alt="wit pijltje links">
          PROFIEL
        </a>
      </div>

      <div class="col-5 create-cosplay">
        <img class="img-fluid cosplay-voorbeeld" src="/img/voorbeeld-cosplayphoto.jpg" alt="cosplay voorbeeld">
        <form method="post" action="/profiel/nieuwe-cosplay" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="file" name="photo_url" accept="image/*" required>
            </div>



            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="PERSONAGE NAAM" placeholder="PERSONAGE NAAM" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="name_serie" name="name_serie" value="SERIE/FILM" placeholder="SERIE/FILM" required>
            </div>


            <button class="button-yellow" type="submit" name="create" class="btn btn-primary">CREËR</button>


            @if( $errors->any() )


                <ul class="alert alert-danger">

                  @foreach( $errors->all() as $error )
                      <li>{{ $error }}</li>
                  @endforeach

                </ul>


            @endif


        </form>
      </div>

      <div class="col">
      </div>

    </div>


@endsection
