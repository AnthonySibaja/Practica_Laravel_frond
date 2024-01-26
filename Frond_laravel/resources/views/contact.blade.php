@extends('layouts.app')

@section('content')

    <h1>Contact page</h1>
    @if (count($person))
    <ul>
        @foreach($person as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
@stop

