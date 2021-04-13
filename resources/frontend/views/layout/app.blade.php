<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="js/app.js"/>
</head>
<body>

    <div class="container">

        @include('frontend::layout.header')

        @yield('content')

    </div>

</body>
</html>
