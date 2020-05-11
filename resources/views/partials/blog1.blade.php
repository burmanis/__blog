@extends('layouts.main')

@section('content')

    @foreach ($manyPosts as $postItem)

    <div class="card">

        <img src="{{ $postItem->img }}" alt="">

        <h2 class="title">{{ $postItem->title }}</h2>
        
        <p>{{ $postItem->excerpt }}</p>
        
        <span class="time"> {{ $postItem->created_at->diffForHumans() }}</span>

        <a href="/blog/{{ $postItem->id}}" class="btn btn-info">Go To Post</a>

    </div>

    @endforeach

    <!-- <h1>Blog</h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam.</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam.</p>
      -->

@endsection

@section('title', "blog page")