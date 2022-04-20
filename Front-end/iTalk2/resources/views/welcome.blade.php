<!DOCTYPE html>
<html lang="">
    <head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
        @extends('layouts.app')
            <!-- <app-components-test></app-components-test> -->
            @section('content')
                <h1>hello</h1>
            @endsection

        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        </script>

    </body>
</html>