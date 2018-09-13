@extends('layouts.app')

@section('content')

    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <a href="/albums/{{$photo->album_id}}">Back to Gallery</a>
    <hr>
    <small>Size: {{$photo->size}} Bytes </small>
    <br><br>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <br><br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")']) !!}

      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Remove Photo', ['class' => 'button alert']) }}

    {!! Form::close() !!}

    <br><br><br><br><br><br><br><br>

@endsection
