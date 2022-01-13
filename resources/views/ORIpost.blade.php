@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-8">
                <h3> {{ $post->title }} </h3>
                <h6 class="mb-4">
                    by. <a class="text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in
                    <a class="text-decoration-none"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }} |
                    </a>
                    <small> {{ $post->created_at->diffForHumans() }} </small>
                </h6>

                @if ($post->image)
                    <div style="max-height: 310px; overflow: hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded-1"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x550?{{ $post->category->name }}" class="img-fluid rounded-1"
                        alt="{{ $post->category->name }}">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="mt-3 d-block">Back to Blog</a>
            </div>
        </div>
    </div>

@endsection
