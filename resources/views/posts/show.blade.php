@extends('layout')

@section('titlePage')
    Post
@endsection

@section('content')
    <div class="row h-100 justify-content-center align-items-center">

        <div class="card px-0">
            <div class="card-header">
                <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer d-flex action-show">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form class="" action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection