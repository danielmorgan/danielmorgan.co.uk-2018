<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />

        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <link rel="shortcut-icon" href="{{ $page->cache_bust('/favicon.ico') }}">

        <title>@yield('title', 'Daniel Morgan - Interactive developer')</title>
    </head>
    <body class="antialiased font-sans bg-blue-lightest">
        <div class="md:flex px-4 md:px-8 xl:px-16">
            <div class="mt-4 md:mt-8 xl:mt-16">
                @include('_partials.sidebar')
            </div>
            <div class="max-w-md mt-8 md:ml-8 md:flex-1 xl:mt-16 xl:ml-16">
                @yield('body')
            </div>
        </div>

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    </body>
</html>
