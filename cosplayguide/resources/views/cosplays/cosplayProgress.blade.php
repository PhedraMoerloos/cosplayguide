@extends('master')


@section('content')


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



@endsection
