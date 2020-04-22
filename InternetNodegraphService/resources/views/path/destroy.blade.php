@extends('master')

@section('blade')
    Destroyer blade
@endsection

@section('options')
    <form method="POST" action="/path/delete">
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit28characters" id="path"/>
            </span>
            <span class="option label">path</span>
        </span>
        <br>
        <span class="option">
            <input type="submit" value="Sell"/>
            <span class="option label message">
                there is no monetary exchange for demonstration purposes
            </span>
        </span>
    </form>
@endsection
