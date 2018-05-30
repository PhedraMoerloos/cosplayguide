@extends('master')


@section('content')

    <h1>New cosplay</h1>

    <form method="post" action="/profiel/nieuwe-cosplay" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <input type="file" name="photo_url" accept="image/*" required>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Naam personage" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="name_serie" name="name_serie" placeholder="Naam serie/film" required>
        </div>

        <button type="submit" name="create" class="btn btn-primary">Creëer</button>



        @if( $errors->any() )


            <ul class="alert alert-danger">

              @foreach( $errors->all() as $error )
                  <li>{{ $error }}</li>
              @endforeach

            </ul>


        @endif



    </form>

@endsection
