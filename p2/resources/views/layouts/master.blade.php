<?php
#
# Copyright 2020 Christopher Reilly
#
?>
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


