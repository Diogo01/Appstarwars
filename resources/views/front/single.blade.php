@extends('layouts.master')

@section('title', $title)

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p class="italic">Crée le {{ $post->date() }} par {{ $post->user->name }}</p>
@stop

@section('sidebar')
    <a href="">J'aimerai être à la suite de la sidebar</a>
@stop