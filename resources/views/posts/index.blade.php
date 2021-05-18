@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h1>I nostri post</h1>

    <a href="{{route('post.create')}}" class="btn btn-primary">Crea un nuovo post</a>

    <div class="posts">
    @foreach ($posts as $post)
        <div class="post">
            <div class="header-post">
                <h5>{{$post -> user}}</h5>
                <p><strong>{{$post -> title}}</strong></p>
                <a class="btn btn-warning float-top-right" href="{{route('post.edit', ['post' => $post -> id])}}">Modifica</a>
            </div>
            <div class="post-content">
                <p>
                    {{$post -> content}}
                </p>
                <a class="btn btn-danger float-bottom-left" href="">Elimina post</a>
                <p class="bottom-right">{{$post -> updated_at}}</p>
            </div>
        </div>
    @endforeach

    </div>
    
@endsection