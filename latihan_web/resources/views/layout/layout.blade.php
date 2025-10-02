<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            @yield('page_title','default title')
        </title>
</head>
<body>
    <header> @yield('header')</header>
    <main> @yield('main_content')</main>
    <footer> @yield('footer','default footer text')</footer>
</body>
</html>