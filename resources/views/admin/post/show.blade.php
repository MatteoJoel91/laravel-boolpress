@extends('admin.layouts.base')

@section('content')
    <div class="container">

      <h1 class="mb-2">Visualizza post</h1>
      
      @if ($post->cover)
        <img class="mb-2 img-fluid" src="{{asset('storage/' .$post->cover )}}" alt="{{$post->title}}">
      @else
        <img class="mb-2 img-fluid" src="{{asset('img/fallback_img.jpg')}}" alt="{{$post->title}}">
      @endif
      
      <div class="mb-2">Titolo: {{$post->title}}</div>
      <div class="mb-2">Categoria: {{isset($post->category) ? $post->category->name : 'N.D.'}}</div>
      <div class="mb-2">Contenuto: {!! $post->content !!}</div>
      <div class="mb-2">Slug: {{$post->slug}}</div>
      <div class="d-flex mb-2">
        <span class="mr-2">Tags: </span>
        @foreach ($post->tags as $tag)
        <h5 class="mr-2"><span class="badge rounded-pill bg-primary text-light">{{$tag->name}}</span></h5>
        @endforeach
      </div>
      <a href="{{ url()->previous() }}" class="btn btn-primary">Torna indietro</a>
    </div>
@endsection