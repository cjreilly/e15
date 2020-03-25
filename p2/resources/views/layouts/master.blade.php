<?php
#
# Copyright 2020 Christopher Reilly
#
?>

@section('title')
{{ $title }}
@endsection

@section('head')
<link href='/css/olspring.css' type='text/css' rel='stylesheet'>
<link href='/css/style.css' type='text/css' rel='stylesheet'>
@endsection

@section('header')
<span class="header container">
  <a class="large-font left-float" href='/'><img class="icon"
    src='/images/spring.png' id='logo' alt='§'></a>
  <span class="container">Welcome to paradise.</span>
</span>
@endsection

@section('footer')
<hr class="break"/>
&copy; {{ date('Y') }}
@endsection

<!doctype html>
<html lang='en'>
    <head>
        <title>{{ $title }}</title>
        <meta charset='utf-8'>
        @yield('head')
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        <section>
            @yield('content')
        </section>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>


