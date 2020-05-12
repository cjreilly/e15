@extends('master')

@section('blade')
    Destroy
@endsection

@section('options')
    <form method="POST" action="/path/destroy">
        @csrf
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit28characters" id="path" name="path"/>
            </span>
            <span class="option label">path</span>
        </span>
        <br>
        <span class="option">
            <input type="submit" value="Remove"/>
        </span>
    </form>
@endsection
