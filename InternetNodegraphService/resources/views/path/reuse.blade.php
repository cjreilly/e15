@extends('master')

@section('blade')
    Reuse
@endsection

@section('options')
    @if (array_key_exists("execute", $options))
        <form method="GET" action="/path/reuse">
            <span class="option">
                <span class="option parameter">
                    <input type="text" class="limit28characters" name="path" id="path"/>
                </span>
                <span class="option label">path</span>
            </span>
            <br>
            <span class="option">
                <input type="submit" value="Execute"/>
            </span>
        </form>
    @endif
    @if (array_key_exists("in-page-view", $options))
        <iframe class="full-page" src="/{{ $path }}"></iframe>
    @endif
@endsection

