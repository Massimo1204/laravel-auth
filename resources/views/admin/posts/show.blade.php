@extends('layouts.app')

@section('content')
    <div class="my-post-container d-flex align-items-center flex-column">
        <div class="w-50 d-flex align-items-center flex-column pt-4 pb-2 border-bottom border-secondary">
            <h2 class="mb-3">{{ $post->user->name }}</h2>
            <img class="mb-3" src="{{ $post->image_source }}" alt="post image">
            <div class="my-content-wrapper">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
@endsection