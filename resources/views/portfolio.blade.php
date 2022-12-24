<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio | klimovproject</title>

    <meta name="description" content="A frontend engineer site. My own project.">
    <meta name="keywords" content="frontend, web, developer, web-sites, javaScript, html, css, nodejs, vue, php, SQL">
    <meta name="author" content="Klimov Roman">
    <link rel="shortcut icon" href="favicon.824cf0c5.ico">

    <!-- Fonts -->
    <link rel="preload" href="/fonts/lores-22-serif.woff2" as="font" type="font/woff2" crossorigin> 
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }} ">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/my.css') }} ">
 
</head>

<body class="antialiased loading"> 
    <main class="relative flex flex-col justify-center min-h-screen sm:items-center py-4 sm:pt-0"> 
        test555

        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-base text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-base text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-base text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="fixed bottom-0 left-0 px-6 py-4 flex  justify-center mt-4 sm:items-center sm:justify-between">
            <div
                class="fixed bottom-0 right-0 px-6 py-4 sm:block text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div> 
    </main>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>
