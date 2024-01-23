@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Post Details </h1>
            </div>
            <div class="col-md-2">
                <a href="{{ route('posts.index') }}" class="btn btn-primary float-end" >List</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <h1>{{ ucfirst($post->title) }}</h1>
            <p>Description: {{ $post->content }}</p>
            <p>Published on: {{ $post->created_at->format('F j, Y') }}</p> 
        </div>
    </div>
   
    <!-- Additional post details as needed -->

    <!-- Add comments or other related features if necessary -->
@endsection