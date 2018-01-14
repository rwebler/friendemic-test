<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Friendemic Test</title>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex mb-4">
            <div class="w-full bg-orange-lightest h-12 text-grey-dark">
                <h1>@yield('title')</h1>
            </div>
        </div>
        <div class="flex mb-4 justify-center">
            @if ($errors->any())
                <div class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
                    <p>Please correct the following errors:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="rounded overflow-hidden border-2 border-grey-light mb-8 bg-white">
            <div class="border-b-2 border-grey-light p-4 flex justify-center p-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>
