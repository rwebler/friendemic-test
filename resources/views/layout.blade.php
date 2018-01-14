<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="rounded overflow-hidden border-2 border-grey-light mb-8 bg-white">
            <div class="border-b-2 border-grey-light p-4 flex justify-center p-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>
