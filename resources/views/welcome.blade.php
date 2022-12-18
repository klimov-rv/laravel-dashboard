<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
    $portfolio1 = 'Portfolio';
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel | klimovproject</title>

    <meta name="description" content="A frontend engineer site. My own project.">
    <meta name="keywords" content="frontend, web, developer, web-sites, javaScript, html, css, nodejs, vue, php, SQL">
    <meta name="author" content="Klimov Roman">
    <link rel="shortcut icon" href="favicon.824cf0c5.ico">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/my.css') }} ">
</head>

<body class="antialiased loading"> 
    <main class="relative flex flex-col justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> 
        <section class="intro"> 
            <div class="logo-kp  text-base  text-3xl  text-8xl">
                KlimovProject<span class="white-dash">_</span>
                {{-- <img src="{{ url('/images/logo_kp.svg') }}" alt="klimovproject logo" /> --}}
            </div>
        </section>
        <section class="content">
            <div class="cover"></div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner ">
                            {{ $portfolio1 }}
                        </span>
                    </h2>
                </div>
                <div class="cell cell--images">
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-2.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-3.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-4.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-5.avif)"></div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /content -->
        <section class="preview">
            <button class="preview__close unbutton">&#9587;</button>
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $portfolio1 }}</span></h2>
                <div class="grid">
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-2.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-3.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-4.avif)"></div>
                    </div>
                    <div class="cell__img">
                        <div class="cell__img-inner" style="background-image: url(images/index-5.avif)"></div>
                    </div>
                </div>
            </div>
        </section>

        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
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

    <script src="{{ URL::asset('js/animate.js') }}"></script>
</body>

</html>
