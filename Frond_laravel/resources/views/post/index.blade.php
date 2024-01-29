@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($post as $post)

            <div class="image-container">
                <img height="100" src="{{$post->path}}" alt="">
            </div>
            <li><a href="{{route('post.show',$post->id)}}">{{$post->titulo}}</a></li>
        @endforeach


    </ul>

@endsection


