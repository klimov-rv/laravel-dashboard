<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel | klimovproject</title>

    <meta name="description" content="A frontend engineer site. My own project.">
    <meta name="keywords" content="frontend, web, developer, web-sites, javaScript, html, css, nodejs, vue, php, SQL">
    <meta name="author" content="Klimov Roman">
    <link rel="shortcut icon" href="favicon.824cf0c5.ico">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/my.css') }} ">
</head>

<body class="admin-panel font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
