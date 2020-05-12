@extends('master')

@section('blade')
    Receipt
@endsection

@section('options')
    <br/>
    <span class="option">
        <span class="option parameter">
            <a name="ins-link" id="ins-link" href="/{{ $tag }}">{{ $tag }}</a>
            <a name="save" id="save" href="/path/save/{{ $tag }}">save</a>
        </span>
        <span class="option label"><label for="ins-link">Right click and copy or save to your favories.</label></span>
        <span class="option label">The cache proxy is created.</span>
    </span>
@endsection

