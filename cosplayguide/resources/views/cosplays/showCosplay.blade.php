@extends('master')


@section('content')


  <img src="{{ $cosplay_creator->profile_picture_url }}" alt="profile picture {{ $cosplay_creator->username }}">
  <h1>{{ $cosplay_creator->username }}</h1>

  <div>
    <h2>{{ $cosplay->name }}</h2>
    <p>From: {{ $cosplay->name_serie }}</p>
  </div>


@endsection
