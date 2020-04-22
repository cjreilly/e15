@extends('master')

@section('blade')
    Receipt
@endsection

@section('options')
    <br/>
    <span class="option">
        <span class="option parameter">
            <a href="/{{ $tag }}">{{ $tag }}</a> <a href="">copy</a>
        </span>
        <span class="option label">The cache proxy is created.</span>
    </span>
@endsection

