@extends('layouts.app')

@section('title', 'New Post')

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

        <form action="{{route('post.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="user">User:</label>
                <input type="text" class="form-control" name="user" id="user" value="{{old('user')}}">
            </div>

            <div class="form-group">
                <label for="title">Titolo del Post:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="content">Contenuto:</label>
                <textarea class="form-control" name="content" id="content" value="{{old('content')}}" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Inserisci</button>
        </form>
@endsection