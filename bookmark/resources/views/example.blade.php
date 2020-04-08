@extends('layouts.master')

@section('content')

    <h1>Example</h1>
    <h4><i>--derived from practice--</i></h4>
    @foreach($methods as $method)
        <a href='{{ str_replace('example', '/example/', $method) }}'> {{ $method }}</a><br>
    @endforeach

@endsection
