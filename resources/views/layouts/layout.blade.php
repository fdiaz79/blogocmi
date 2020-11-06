<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OCMI BLOGS</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
        <link rel="stylesheet" href="/styles/style.css">


    </head>
    <body class="antialiased">
        @yield('content')


    </body>
</html>
