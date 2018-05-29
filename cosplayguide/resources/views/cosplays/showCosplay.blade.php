@extends('master')


@section('content')


  <img src="{{ $cosplay_creator->profile_picture_url }}" alt="profile picture {{ $cosplay_creator->username }}">
  <h1>{{ $cosplay_creator->username }}</h1>

  <div>
    <h2>{{ $cosplay->name }}</h2>
    <p>From: {{ $cosplay->name_serie }}</p>
  </div>



@if ($cosplay->status == "completed")

  <hr>

  <div>
    <div>
      <p>Amount spent:</p>
      <p>€{{ $cosplay->euros_spent }}</p>
    </div>

    <div>
      <p>Time spent:</p>
      <p>{{ $cosplay->months_spent }} maanden</p>
    </div>

    <div>
      <p>Moeilijkheid:</p>
      <p>{{ $cosplay->difficulty }}</p>
    </div>

    <div>
      <p>Zelfstandigheid:</p>
      <p>{{ $cosplay->independence_percentage }} %</p>
    </div>

  </div>

  <img src="{{ $cosplay_creator->profile_picture_url }}" alt="profile picture {{ $cosplay_creator->username }}">
  <h1>{{ $cosplay_creator->username }}</h1>
  <p>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($cosplay->published_at))->format('d/m/Y') }}</p>

  <p>{{ $cosplay->project_description }}</p>
@endif

  @foreach ($cosplayphotos as $cosplayphoto)
      <img src="{{ $cosplayphoto->photo_url }}" alt="{{ $cosplay->name }} cosplay">
  @endforeach



@endsection
