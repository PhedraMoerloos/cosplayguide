@extends('master')


@section('content')


    <a href="profiel/edit">edit</a>

    <img src="{{ $user->profile_picture_url }}" alt="profile picture {{ $user->username }}">

    <h1>{{ $user->username }}</h1>

    <p>{{ $user->description }}</p>


    <p>number of completed cosplays: {{ $number_of_completed_cosplays }}</p>
    <p>number of cosplays in progress: {{ $number_of_cosplays_in_progress }}</p>
    <p>level: {{ $user->level }}</p>



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
