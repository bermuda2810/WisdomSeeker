<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font: 13px Helvetica, Arial;
        }

        form {
            background: #000;
            padding: 3px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        form input {
            border: 0;
            padding: 10px;
            width: 90%;
            margin-right: .5%;
        }

        form button {
            width: 9%;
            background: rgb(130, 224, 255);
            border: none;
            padding: 10px;
        }

        #messages {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #messages li {
            padding: 5px 10px;
        }

        #messages li:nth-child(odd) {
            background: #eee;
        }

        #messages {
            margin-bottom: 40px
        }

        .input-group-btn:last-child>.btn {
            background-color: #000;
            border: none;
            padding: 6px 12px;
        }

        .input-group-btn {
            width: 3%;
        }

        .input-group .form-control {
            border: 0px;
            margin-right: 0px;
        }

    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
