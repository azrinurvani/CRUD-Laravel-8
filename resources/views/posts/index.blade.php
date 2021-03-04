@extends('layouts.main')

@section('title')
    Posts
@endsection

@section('content')
    @forelse($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
                <a href="{{route('posts.show', ['post' => $post->id])}}">
                    {{$post->title}}
                </a>
            
                <p class="card-text">
                    <span class="badge bagde-info">Created </span> {{$post->created_at->diffForHumans()}} 
                    <span class="badge bagde-info">Updated </span> {{$post->updated_at->diffForHumans()}} 
                </p>
            <a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-info">Edit</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    @empty
        <h4>No Post Yet!</h4>
    @endforelse
@endsection