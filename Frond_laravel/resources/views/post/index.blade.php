@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($post as $post)
            <li><a href="{{route('post.show',$post->id)}}">{{$post->titulo}}</a></li>
        @endforeach


    </ul>

@endsection


