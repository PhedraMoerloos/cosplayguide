@extends('master')


@section('content')

<h1>Almost done</h1>

@foreach ($cosplayphotos as $cosplayphoto)
    <img src="{{ asset('public/storage/images/' . $cosplayphoto->photo_url) }}" alt="{{ $cosplay->name }} cosplay">
    <a href="{{ action('CosplayphotoController@delete', [$cosplayphoto->id]) }}">Delete</a>
@endforeach


<form method="post" action="/profiel/cosplay-info/update/{{ $cosplay->id }}" enctype="multipart/form-data">

    <!--<div class="form-group">
        <input type="file" name="photo_url[]" id="cosplayphoto" multiple />
    </div>-->


    {{ csrf_field() }}


    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Naam personage" value="{{ $cosplay->name }}" required>
    </div>

    <div class="form-group">
        <label for="name_serie">Serie</label>
        <input type="text" class="form-control" id="name_serie" name="name_serie" placeholder="Naam serie/film" value="{{ $cosplay->name_serie }}" required>
    </div>

    <div>
      <img src="{{ asset('/storage/images/' . $cosplay->thumbnail_url) }}" alt="thumbnail {{ $cosplay->name }} ">
    </div>

    <div class="form-group">
        <input type="file" name="thumbnail_url">
    </div>

    <div class="form-group">
        <label for="difficulty">Moeilijkheidsgraad</label>
        <select name="difficulty" size="3" required>
            <option value="Gemakkelijk">Gemakkelijk</option>
            <option value="Gemiddeld">Gemiddeld</option>
            <option value="Moeilijk">Moeilijk</option>
        </select>
    </div>


    <div class="form-group">
        <label for="independence_percentage">Zelfstandigheid</label>
        <input type="number" class="form-control" id="independence_percentage" name="independence_percentage" placeholder=50 value="{{ $cosplay->independence_percentage }}" required>%
    </div>

    <div class="form-group">
        <label for="months_spent">Gespendeerde tijd</label>
        <input type="number" class="form-control" id="months_spent" name="months_spent" placeholder=2 value="{{ $cosplay->months_spent }}" required>maanden
    </div>

    <div class="form-group">
        <label for="euros_spent">Gespendeerd budget</label>
        <input type="number" class="form-control" id="euros_spent" name="euros_spent" placeholder=100 value="{{ $cosplay->euros_spent }}" required> euros <span>geschat*</span>
    </div>


    <div class="form-group">
        <label for="project_description">Project beschrijving</label>
        <input type="text" class="form-control" id="project_description" name="project_description" placeholder="Verloop van het cosplayproces, gebruikte materialen (lenzen, pruiken,..)" value="{{ $cosplay->project_description }}" required>
    </div>


    <button type="submit" class="btn btn-primary">Publiceer</button>



    @if( $errors->any() )


        <ul class="alert alert-danger">

          @foreach( $errors->all() as $error )
              <li>{{ $error }}</li>
          @endforeach

        </ul>


    @endif

</form>



@endsection
