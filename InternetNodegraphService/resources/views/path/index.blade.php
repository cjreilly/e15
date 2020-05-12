@extends('master')

@section('blade')
    Index
@endsection

@section('options')
@isset($options['create'])
<br>
<span class="option"><a href="/path/create">Proxy Designer</a></span>
@endisset
@isset($options['destroy'])
<br>
<span class="option"><a href="/path/destroy">Deconstructor</a></span>
@endisset
@isset($options['reuse'])
<br>
<span class="option"><a href="/path/reuse">Request Executor</a></span>
@endisset
@isset($options['algo1'])
<br>
<span class="option"><a href="/debug/algo">Algo Sample 1</a></span>
@endisset
@endsection
