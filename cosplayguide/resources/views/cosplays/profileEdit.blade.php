@extends('master')


@section('content')
  <h1>Edit profiel</h1>

  <form method="post" action="/profiel" enctype="multipart/form-data">

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


  </form>

@endsection
