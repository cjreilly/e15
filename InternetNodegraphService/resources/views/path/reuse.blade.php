@extends('master')

@section('blade')
    Reuser blade
@endsection

@section('options')
    <form method="GET" action="/path/reuse">
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit28characters" name="tag" id="tag"/>
            </span>
            <span class="option label">path</span>
        </span>
        <br>
        <span class="option">
            <input type="submit" value="Execute"/>
            <span class="option label message">
                there is no monetary exchange for demonstration purposes
            </span>
        </span>
    </form>
@endsection

