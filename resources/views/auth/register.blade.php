<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link
            rel="shortcut icon"
            href="./assets/img/favicon.ico"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="./assets/img/apple-icon.png"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
            />
        <link
            rel="stylesheet"
            href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
            />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Register</title>
</head>
<body>
    <div id="app">
        <stepper-register
            test="@lang('informations personelles')"
        />
    </div>
</body>
</html>