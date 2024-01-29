@extends('layouts.app')

@section('content')

    <h1>Crear nuevo Post</h1>
    @csrf
    {!! Form::open(['method' => 'POST', 'route' => 'post.store', 'enctype' => 'multipart/form-data']) !!}


    <div class="form-gruop">
        {!! Form::label('titulo','titulo')!!}
        {!! Form::text('titulo',null,['class'=>'form-control'])!!}
    </div>

    
    <div class="form-gruop">
        {!! Form::file('file',['class'=>'form-control'])!!}
    </div>


    {!! Form::submit('Create Post', ['class'=>'form-control']) !!}


        {{-- <input type="text" name="titulo" placeholder="Enter titulo"> --}}
        {{-- <input type="submit" name="submit" value="Submit"> --}}
    {!! Form::close() !!}


    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

@section('footer')
    
@endsection
