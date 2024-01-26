@extends('layouts.app')

@section('content')
    <h1>Editar Post</h1>
    {{-- <form method="post" action="/post/{{$post->id}}"> --}}
        
        @csrf
       
        {!! Form::model($post, ['method' => 'PATCH', 'route' => ['post.update', $post->id]]) !!}

        {!! Form::label('titulo','titulo')!!}
        {!! Form::text('titulo',null,['class'=>'form-control'])!!}

        {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}

        {!! Form::close() !!}

  {{-- <input type="text" name="titulo" placeholder="Enter titulo" value="{{$post->titulo}}">
        <input type="submit" name="submit" value="UPDATE">  --}}

        {!! Form::model($post, ['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}


    {{-- <form method="post" action="/post/{{$post->id}}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">
    </form> --}}

@endsection

@section('footer')
    
@endsection
