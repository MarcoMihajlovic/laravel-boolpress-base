@extends('layouts.app')

@section('title', 'Modify Post')

@section('content')
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('post.update', ['post' => $post -> id])}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="user">User:</label>
                <input type="text" class="form-control" name="user" id="user" value="{{$post -> user}}">
            </div>

            <div class="form-group">
                <label for="title">Titolo del Post:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$post -> title}}">
            </div>

            <div class="form-group">
                <label for="content">Contenuto:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post -> content}}</textarea>
            </div>

            <button type="submit" class="btn btn-default">Inserisci</button>
        </form>
@endsection