@extends('master')

@section('blade')
    Create
@endsection

@section('options')
    <form method="POST" action="/path/create">
        @csrf
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit28characters" name="server" id="server"/>
            </span>
            <span class="option label">server</span>
        </span>
        <span class="option">
            <span class="option parameter"> : </span>
            <span class="option parameter"> &nbsp; </span>
        </span>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit10characters" name="port" id="port"/>
            </span>
            <span class="option label">port</span>
        </span>
        <br>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit40characters" name="path" id="path"/>
            </span>
            <span class="option label">path</span>
        </span>
        <br>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit40characters" name="query" id="query"/>
            </span>
            <span class="option label">query</span>
        </span>
        <br>
        <span class="option">
            <input type="submit" value="Reserve"/>
        </span>
    </form>
@endsection
