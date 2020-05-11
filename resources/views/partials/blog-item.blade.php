@extends('layouts.main')

@section('content')

<div class="card">
    <img src="{{ $post->img }}" alt="">
    <h2 class="title">{{ $post->title }}</h2>
    <div class="body">{!! $post->body !!}</div>
    <span class="time">
        {{ $post->created_at->diffForHumans() }}
    </span>
</div>

    @forEach ($posts as $item)
        @if ($item->id !=$post->id)
            <h2 class="title">{{ $item->title}}</h2>
            <a href="/blog/{{$item->id}}" class="btn btn-info">Go TO POST</a>
        @endif

    @endsection

@section('title', "Blog Page")
