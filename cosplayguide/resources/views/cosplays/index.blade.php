@extends('master')


@section('content')


    <img src="{{ $user->profile_picture_url }}" alt="profile picture {{ $user->username }}">

    <h1>{{ $user->username }}</h1>

    You are logged in!

    @foreach ($cosplays as $cosplay)

      @if ($cosplay->status == "completed")
        <div>
          <h2><a href={{"/profiel/cosplays/". $cosplay->id}}>{{ $cosplay->name }} completed</a></h2>
          <img src="{{ $cosplay->thumbnail_url }}" alt="thumbnail {{ $cosplay->name }} ">
        </div>


      @else
      <div>
        <h2><a href={{"profiel/cosplay-overzicht/". $cosplay->id}}>{{ $cosplay->name }}</a></h2>
        <img src="{{ $cosplay->thumbnail_url }}" alt="thumbnail {{ $cosplay->name }} ">
      </div>
      @endif

    @endforeach



@endsection
