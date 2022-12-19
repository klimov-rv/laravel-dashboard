<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
    $service1 = 'Frontend';
    $service2 = 'Backend';
    $service3 = 'Design UX/UI';
    $service4 = 'Other skills';
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
</head>

<body class="antialiased loading"> 
    <main class="relative flex flex-col justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> 
        <section class="intro"> 
            <div class="logo-kp">
                <span class="klmv halfword">Klimov</span>
                <span class="prjt halfword">Project<span class="white-dash">_</span></span> 
                {{-- <img src="{{ url('/images/logo_kp.svg') }}" alt="klimovproject logo" /> --}}
            </div>
        </section>
        <section class="content">
            <div class="cover"></div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-xlg">
                            {{ $service1 }}
                        </span>
                    </h2>
                </div>
                <!-- /1 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-html-5-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back"  style="background-image: linear-gradient(230deg, rgba(125,192,190,0.3), rgba(239, 186, 26, 0.5));"> HTML5 <br> типографика, таблицы, семантика</div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-css3-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: linear-gradient(140deg, rgba(187,86,181,0.3), rgba(28,92,234,0.3));"> CSS3 <br> селекторы, нейминг, div- flexbox- grid-вёрстка </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-javascript-512.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: url(images/icons/icons8-javascript.gif);background-color: transparent;background-size: 100%;background-repeat: no-repeat;background-position: center center;">{{-- JavaScript, ES6, DOM-API --}}</div>
                            
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-vue-js-512.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #01ad2ca8"> Vue </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/nuxt-dot-js.svg);background-color: transparent;background-size: 97%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Nuxt Framework</div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-xlg">
                            {{ $service2 }}
                        </span>
                    </h2>
                </div>
                <!-- /2 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/php.svg);"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #6e81b6;"> PHP <br></div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/1c_bitrix_logo.svg);background-color: transparent;background-size: 51%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #c60c30; "> 1c-Bitrix </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/1969px-Laravel.svg);background-color: transparent;background-size: 51%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #ff2d20;"> Laravel </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-xlg">
                            {{ $service3 }}
                        </span>
                    </h2>
                </div>
                <!-- /3 -->
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
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-xlg">
                            {{ $service4 }}
                        </span>
                    </h2>
                </div>
                <!-- /4 -->
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
            <!-- /1 -->
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $service1 }}</span></h2>
                {{-- <h3>FRONTEND. Основные технологии </h3> --}}
                <div class="grid grid-8cols">
                    <!-- /1-6 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/svg.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >SVG-анимация</div>
                        </div>
                    </div>
                    <!-- /1-7 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/jquery-10-1175155.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >jQuery-эффекты, AJAX, chaining</div>
                        </div>
                    </div>
                    <!-- /1-8  -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/greensock.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Advanced js-animation</div>
                        </div>
                    </div>
                    <!-- /1-9 строка2--> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-bootstrap-512.png);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div> 
                            <div class="cell__img-inner styled__back" style="background-color: #673ab7;">Bootstrap</div>
                        </div>
                    </div>
                    <!-- /1-10 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-webpack-512.png);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #81d4fa">Webpack</div>
                        </div>
                    </div>
                    <!-- /1-11 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/tw.svg);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div> 
                            <div class="cell__img-inner styled__back" style="background-color: #06b6d4;">Tailwind CSS</div>
                        </div>
                    </div> 
                    <!-- /1-12 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/pugjs_logo_icon_168890.png);background-color: transparent;background-size: 99%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #55322a">Pug</div>
                        </div>
                    </div>
                    <!-- /1-13 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/gulp-226000.png);background-color: transparent;background-size: contain;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #d44945">Gulp</div>
                        </div>
                    </div>
                    <!-- /1-14 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/scss-512.png);background-color: transparent;background-size: 81%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Scss</div>
                        </div>
                    </div> 
                    <!-- /1-15 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/lodash.svg);background-color: transparent;background-size: 71%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #3492ff;"> Lodash </div>
                        </div>
                    </div>
                    <!-- /1-16 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-git-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back" ><a href="https://github.com/klimov-rv" target="_blank" rel="noopener noreferrer">Github <i class="fab fa-github-alt"></i></a>  </div>
                        </div>
                    </div>
                    <!-- /1-17  --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-visual-studio-code-2019-512.png);background-color: transparent;background-size: 99%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #0277bd">VSC</div>
                        </div>
                    </div>
                    <!-- /1-18  -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-figma-512.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: url(images/icons/icons8-figma.gif);" > </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- /2 -->
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $service2 }}</span></h2>
                <div class="grid grid-5cols">
                    <!-- /2-4 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-nodejs.svg);background-color: transparent;background-size: 95%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: linear-gradient(230deg, rgba(125,192,190,0.3), rgba(26,239,145,0.5));">NodeJS</div> 
                        </div>
                    </div>
                    <!-- /2-5 -->
                    <!-- /2-6 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-wordpress.svg);background-color: transparent;background-size: 83%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-image: linear-gradient(230deg, rgba(138, 125, 192, 0.3), #00305518);"> WordPress </div>
                        </div>
                    </div>
                    <!-- /2-7 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/docker.svg);background-color: transparent;background-size: 83%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"> Docker </div>
                        </div>
                    </div>
                    <!-- /2-8 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-ruby-programming-language.svg);background-size: 81%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-image: linear-gradient(230deg, rgba(192, 125, 176, 0.3), rgba(239, 26, 26, 0.5));"> Ruby </div>
                        </div>
                    </div>
                    <!-- /2-9 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/Ruby_on_Rails-Logo.svg);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back"  style="background-image: linear-gradient(230deg, rgba(125, 133, 192, 0.3), rgba(239, 26, 26, 0.5));"> Ruby on Rails </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /3 -->
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $service3 }}</span></h2>
                <div class="grid">
                    <!-- /3-5 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/index-2.avif)"></div>
                            <div class="cell__img-inner styled__back" > Blah blah blah</div>
                        </div>
                    </div>
                    <!-- /3-6 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-3.avif)"></div>
                    </div>
                    <!-- /3-7 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-4.avif)"></div>
                    </div>
                    <!-- /3-8 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-5.avif)"></div>
                    </div>
                </div>
            </div>
            <!-- /4 -->
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $service4 }}</span></h2>
                <div class="grid">
                    <!-- /4-5 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/index-2.avif)"></div>
                            <div class="cell__img-inner styled__back" > Blah blah blah</div>
                        </div>
                    </div>
                    <!-- /4-6 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-3.avif)"></div>
                    </div>
                    <!-- /4-7 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-4.avif)"></div>
                    </div>
                    <!-- /4-8 -->
                    <div class="cell__img persp">
                        <div class="cell__img-inner" style="background-image: url(images/index-5.avif)"></div>
                    </div>
                </div>
            </div>
        </section>

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

    <script src="{{ URL::asset('js/animate.js') }}"></script>
</body>

</html>
