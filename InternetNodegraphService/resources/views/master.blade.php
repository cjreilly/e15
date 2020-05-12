@section('blade')
    Master blade
@endsection

@section('notification')
    <h3>{{ $notification ?? '' }}</h3>
@endsection

@section('quicklinks')
    <span class="header quicklink bar">
        <a href="/"><img src="/root.png" class="icon" alt=" root "/></a>
        @if(Auth::user())
            <form method='POST' id='logout' class="character" action='/logout'>
                {{ csrf_field() }}
                <button type='submit' class="invisible" ><img src="/logout.png" class="icon interactive character" alt=" logout "/></button>
            </form>
        @else
            <a href="/login"><img src="/login.png" class="icon" alt=" login "/></a>
        @endif
    </span>
@endsection

@section('quickmessage')
    @if (count($errors) > 0)
    <span class="header alert bar" id="error-message-display">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button href="#" class="invisible" onClick="document.getElementById('error-message-display').remove();"><img src="/close.png"
        class="icon interactive character" alt="  close  "/></button>
    </span>
    @endif
@endsection


@section('saves')
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Internet Nodegraph Service</title>

        <!-- Scripts -->
        <script src="js/site.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/site.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'sans', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @yield('quicklinks')
        @yield('quickmessage')
        <div class="flex-center full-height">
            <div class="content 
                  {{ (isset($options) && is_array($options)
                      && array_key_exists('reduce-form', $options))
                      ? 'reduced-form'
                      : '' }}">
                @if (isset($options) && $options != 0
                      && (!is_array($options) || !array_key_exists("reduce-form", $options)))
                    <div class="title m-b-md">
                        @yield('blade')
                    </div>
                @endif
                @isset($notification)
                    @yield('notification')
                @endisset
                @if (Auth::user())
                    @if (isset($options) && $options != 0
                              && (!is_array($options) || !array_key_exists("reduce-form", $options)))
                        <div>
                            <span>INS Options</span>
                            <span>@yield('options')</span>
                        </div>
                    @else
                        @yield('options')
                    @endif
                @else
                    <p>Login for options.</p>
                    @yield('no-options')
                @endif
                @yield('saves')
            </div>
        </div>
    </body>
</html>
