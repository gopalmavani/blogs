@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Edit Post</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.index') }}" class="btn btn-primary float-end">List</a>
            </div>
        </div> 
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required class="form-control" value="{{ old('title', $post->title) }}">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" required class="form-control">{{ old('content', $post->content) }}</textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
        </form>
    </div>
@endsection