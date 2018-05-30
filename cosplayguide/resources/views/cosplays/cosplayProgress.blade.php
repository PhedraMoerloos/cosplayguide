@extends('master')


@section('content')


    @foreach ($cosplayphotos as $cosplayphoto)
        <img src="{{ asset('public/storage/images/' . $cosplayphoto->photo_url) }}" alt="{{ $cosplay->name }} cosplay">
    @endforeach

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


    <button type="submit" name="cosplay_completed">Klaar!</button>



@endsection
