@extends('master')

@section('title')
  <title>Bewerk profiel</title>
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

      <h1 class="edit-profile-title">Bewerk je profiel</h1>

      <form method="post" action="/profiel" enctype="multipart/form-data">

          {{ csrf_field() }}


          <div class="cosplay-voorbeeld">

          <img class="profile-picture-large edit-profile" src="{{ asset('/storage/images/' . $user->profile_picture_url) }}" alt="profile picture {{ $user->username }}">

          <div class="form-group edit-profile">
            <input class="inputfile" type="file" name="profile_picture_url" id="profile_picture_url" accept="image/*" data-multiple-caption="{count} files selected" />
            <label for="profile_picture_url"><span>Upload nieuwe foto</span></label>
          </div>


          </div>



          <div class="form-group description">
              <input class="edit-profile" type="text" class="form-control" id="description" name="description" placeholder="Jouw beschrijving" value="{{ $user->description }}" required>
          </div>


          <button class="button-yellow create" type="submit" name="create">
            <span>PAS AAN</span>
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






  <!--<form method="post" action="/profiel" enctype="multipart/form-data">

      {{ csrf_field() }}

      <div class="form-group">
          <input type="file" name="profile_picture_url" accept="image/*" required>
      </div>


      <div class="form-group">
          <input type="text" class="form-control" id="description" name="description" placeholder="Jouw beschrijving" value="{{ $user->description }}" required>
      </div>


      <button type="submit" name="create" class="btn btn-primary">Pas aan</button>



      @if( $errors->any() )


          <ul class="alert alert-danger">

            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach

          </ul>


      @endif


  </form>-->

@endsection
