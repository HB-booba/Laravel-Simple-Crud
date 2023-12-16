@extends('layout')

@section('titlePage')
    Module 1 simple CRUD
@endsection

@section('content')
    @if(Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="row custom-flex-container">
        @foreach ($posts as $post)
            <div class="col custom-flex-item">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <a class="h5" href={{ route('posts.show', ['post' => $post->id]) }} >{{ $post->title }}</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('posts.edit', $post->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection