@extends('layouts.main')

@section('title','Show Post')

@section('content')
    <h2>{{$post->title}}</h2>
    <img class="img-fluid img-thumbnail" src="{{ asset('storage/'.$post->thumbnail) }}"/>
    {{$post->content}}
@endsection