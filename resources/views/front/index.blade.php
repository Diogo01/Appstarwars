@extends('layouts.master')

@section('title', $title)

@section('content')
    {{ $posts->links() }}
    @forelse($posts as $post)
    
        <h1><a href="{{url('article',[$post->id])}}" class="">{{$post->title}}</a></h1>

         @if($picture = $post->picture)
        <div>
             <img class="img-reponsive" src="{{url('uploads', $post->picture->uri)}}">
        </div>
        @endif

        @if(!is_null($post->category))
            <p>catégorie: {{$post->category->title}} </p>
        @else
            <p>Pas de catégorie associée pour cette article</p>
        @endif

        @if(!is_null($post->user))
            <p> auteur: <a href="{{url('user', [$post->user->id])}}">{{$post->user->name}}</a></p>
        @else
            <p>pas d'auteur</p>
        @endif

        @forelse($post->tags as $tag)
            <h4>Tags</h4>
            <p class="tag"> {{$tag->name}}</p>
        @empty

        @endforelse
   

       
        

    @empty
    @endforelse
    {{ $posts->links() }}
@endsection