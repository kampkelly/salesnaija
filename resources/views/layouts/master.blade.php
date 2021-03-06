<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SalesNaija</title>
             <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <link href="{{ asset('css/headmobile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="{{ asset('js/headscript.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset('js/script1.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script>
          $( function() {
            $( "input" ).checkboxradio();
          } );
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="{{ asset('css/myiconstyle.css') }}" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body style="width: 100%;">
    <div style="min-height: 100vh;">
        @include('partials/new_header')
         @if($flash = session('message'))
            <div class="alert alert-success notifications_panel" id="notifier" role="alert" style="position: fixed; top: 40px; left: 20%; width: 60%; z-index: 60;">
                {{$flash}}
                <span class="glyphicon glyphicon-remove pull-right" id="cancel_notifier" aria-hidden="true" style="cursor: pointer;"></span>
            </div>
        @endif
        <div class="search_top" style="margin-top: 45px; position: fixed; background-color: white;">
            @include('partials/search')
        </div>
        <div class="search_top" style="height: 60px"></div>
        <div class="search_desktop" style="margin-top: 0px; positio: fixed;">
            @include('partials/search')
        </div>
        @yield('content')

        @include('partials/master_script')
    </div>
    <div style="height: 100px;"></div>
    @include('partials/footer')

<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
