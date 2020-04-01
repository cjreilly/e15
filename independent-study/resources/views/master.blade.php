<?php
#
# Copyright 2020 Christopher Reilly
#
$sections=["industry-classification","basic-networking","iot-protocols","interoperability"];
?>

@section('pinbar')
<?php
$pins = session('pin');
?>
@if($pins != null)
  <ul class="pinbar">
  @foreach ($pins as $P => $PData)
    <li>
    <a href="/{{ $PData['route'] }}">{{ $PData['title'] }}</a>
  @endforeach
  </ul>
@endif
@endsection

@section('navbar')
@component('component.home')@endcomponent
@component('component.clearsession')@endcomponent
<?php
$index = json_decode(file_get_contents('./index.json'), TRUE);
?>
@if($index != null)
  <ol class="navbar">
  @foreach ($index['section'] as $S => $SData)
    <li>
    <a href="/#<?php echo $S; ?>">
      <?php echo $SData['title']; ?>
      @component('component.filter',['id'=>$S])@endcomponent
    </a>
    @if(array_key_exists('section', $SData) === TRUE)
      <ul>
      @foreach ($SData['section'] as $SubS => $SubSData)
        <li>
        <a href="/#<?php echo $S.".".$SubS; ?>">
          <?php echo $SubSData['title']; ?>
        </a>
      @endforeach
      </ul>
    @endif
  @endforeach
  </ol>
  @else
    <ol class="navbar">
      @component('component.alert',['message'=>'No Content'])@endcomponent
    </ol>
  @endif
@endsection

<!doctype html>
<html lang='en'>
    <head>
        <title>{{ $title ?? '' }}</title>
        <meta charset='UTF-8'>
        @yield('head')
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        <section>
            <table class="full-window">
                <tr>
                    <td class="full-window-sidebar">
                      @yield('navbar')
                      @yield('pinbar')
                    </td>
                    <td class="full-window-content">
                      @yield('content')
                    </td>
                </tr>
            </table>
        </section>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>

