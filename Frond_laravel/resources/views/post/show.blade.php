@extends('layouts.app')

@section('content')

    <h1><a href="{{route('post.edit', $post->id)}}"> {{$post->titulo}}</a></h1>

@endsection

