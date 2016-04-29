@extends('layouts.master')

@section('title', $title)

@section('content')
<h1>{{ $category->title }}</h1>
<p>{{ $category->excerpt }}</p>

@foreach($category->posts as $post)

<h3>{{ $post->title }}</h3>

@endforeach

@stop

@section('sidebar')
    <a href="">J'aimerai être à la suite de la sidebar</a>
@stop