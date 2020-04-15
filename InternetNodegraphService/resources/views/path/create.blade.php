@extends('master')

@section('blade')
    Creator blade
@endsection

@section('options')
    <form method="POST" action="/path/create">
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit28characters" id="server"/>
            </span>
            <span class="option label">server</span>
        </span>
        <span class="option">
            <span class="option parameter"> : </span>
            <span class="option parameter"> &nbsp; </span>
        </span>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit10characters" id="port"/>
            </span>
            <span class="option label">port</span>
        </span>
        <br>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit40characters" id="path"/>
            </span>
            <span class="option label">path</span>
        </span>
        <br>
        <span class="option">
            <span class="option parameter">
                <input type="text" class="limit40characters" id="query"/>
            </span>
            <span class="option label">query</span>
        </span>
        <br>
        <span class="option"><input type="submit" value="Submit"/></span>
    </form>
@endsection
