@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p type="button" class="btn btn-success">{{Session::get('message')}}</p>
    @endif

    {{ $posts->links() }}

    <table class="table">
        <thead>
        <tr>
            <th>status</th>
            <th>Name</th>
            <th>date</th>
            <th>picture </th>
            <th>category</th>
            <th>tags</th>
            <th>action</th>
        </tr>
        </thead>
        
        @forelse($posts as $post)
            <tr>
                <td>{{$post->status}}</td>
                <td><a href="{{url('post',[$post->id, 'edit'])}}" class="">{{$post->title}}</a></td>
                <td>Date: {{$post->published_at? $post->published_at : 'Non daté'}}</td>
                <td>
                    @if($picture = $post->picture)
                    <img src="{{url('uploads', $post->picture->uri)}}"> 
                    @endif
                </td>
                <td>
                    @if(!is_null($post->category))
                        {{$post->category->title}}
                    @else
                        Non catégorisé
                    @endif
                </td>
                <td>
                    @forelse($post->tags as $tag)
                        <span class="tag">{{$tag->name}}</span>
                    @empty
                        aucun tag
                    @endforelse
                </td>

                <td>
                    <form class="destroy" method="POST" action="{{url('post', $post->id)}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="title_h" value="{{$post->title}}">
                        <input class="btn btn-danger" name="delete" type="submit" value="Suprimer">
                    </form>
                </td>
            </tr>
        @empty
            <p>Aucun article en base</p>
        @endforelse
    </table>



@endsection