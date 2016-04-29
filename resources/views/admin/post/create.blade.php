@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif

    <form method="POST" action="{{url('post')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{$userId}}">


        <fieldset class="form-group">
            <label>Titre</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}}">
        </fieldset>

        <fieldset class="form-group">
        <label>Contenu</label>
            @if($errors->has('title')) <span class="error">{{$errors->first('title')}}@endif
            <textarea class="form-control" name="content">{{old('content')}}</textarea>
            @if($errors->has('content')) <span class="error">{{$errors->first('content')}}@endif
        </fieldset>

        <fieldset class="form-group">
            <label>sélectionner une catégorie</label>
                <select class="form-control" name="category_id">
                    @forelse($categories as $id=>$title)
                        <option value="{{$id}}">{{$title}}</option>
                    @empty
                    @endforelse
                    <option value="0" selected>non catégorisé</option>
        </fieldset>
        <fieldset class="checkbox">
        <label for="status">Statut:</label>

                <label>
                    <input id="status" type="checkbox" name="status" value="opened" > Check me out
                </label>

        </fieldset>

        <fieldset>
            <input type="file" name="picture" >
            @if($errors->has('picture'))
                <span class="error">{{ $errors->first('picture') }}</span>
            @endif
            <label for="name">titre de l'image</label>
            <input type="text" name="name">
            @if($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
            @endif 
        </fieldset>

        

        <fieldset class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="published_at">
        </fieldset>

        <fieldset class="form-group">
        <div class="form-select">
            <label for="tags">tag</label></p>
                <select name="tag_id[]" multiple>
                    @foreach($tags as $id => $name)
                        <option value="{{$id}}">{{$name}} </option>
                    @endforeach
            </select>
            @if($errors->has('tags')) <span class="error">{{ $errors->first('tags') }}</span> @endif 
        
        </div>
        </fieldset>


        <button type="submit" class="btn btn-primary">Valider</button>


    </form>
@endsection