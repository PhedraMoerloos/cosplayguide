@extends('master')


@section('content')

<h1>Almost done</h1>

<a href="{{ action('CosplayController@change_status', [$cosplay->id, "completed"]) }}" class="btn btn-primary">Publiceer</a>

@endsection
