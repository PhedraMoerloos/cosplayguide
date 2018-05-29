@extends('master')


@section('content')


  <img src="{{ $cosplay_creator->profile_picture_url }}" alt="profile picture {{ $cosplay_creator->username }}">
  <h1>{{ $cosplay_creator->username }}</h1>

  <div>
    <h2>{{ $cosplay->name }}</h2>
    <p>From: {{ $cosplay->name_serie }}</p>
  </div>

  @foreach ($cosplayphotos as $cosplayphoto)
      <img src="{{ $cosplayphoto->photo_url }}" alt="{{ $cosplay->name }} cosplay">
  @endforeach



@endsection
