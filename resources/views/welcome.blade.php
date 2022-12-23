<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
    $service1 = 'Frontend';
    $service2 = 'Backend';
    $service3 = 'WEB-design';
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
    <link rel="preload" href="/fonts/lores-22-serif.woff2" as="font" type="font/woff2" crossorigin> 
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }} ">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/my.css') }} ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
</head>

<body class="antialiased loading"> 
    <main class="relative flex flex-col justify-center min-h-screen sm:items-center py-4 sm:pt-0"> 
        <section class="intro"> 
            <div class="logo-kp">
                <span class="halfword klmv">
                    <div class="klmv_animate">
                        <a data-text="Klimov" href="#">Klimov</a>
                    </div>
                    <div class="arrow-menu"><i class="fa fa-chevron-down"></i></div>
                </span> 
                {{-- <span class="klmv halfword">Klimov <div class="arrow-menu"><i class="fa fa-chevron-down"></i></div> </span> --}}
                <span class="halfword prjt">Project<span class="white-dash">_</span></span>
            </div>
        </section>
        <section class="content">
            <div class="cover"></div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-3x">
                            {{ $service1 }}
                        </span>
                    </h2>
                </div>
                <!-- /1 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-html-5-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: linear-gradient(230deg, rgba(125,192,190,0.3), rgba(239, 186, 26, 0.5));">
                                HTML5 
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-css3-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: linear-gradient(140deg, rgba(187,86,181,0.3), rgba(28,92,234,0.3));"> CSS3 
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-javascript-512.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-image: url(images/icons/icons8-javascript.gif);background-color: transparent;background-size: 100%;background-repeat: no-repeat;background-position: center center;">
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-vue-js-512.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #01ad2ca8"> Vue 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/nuxt-dot-js.svg);background-color: transparent;background-size: 97%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Nuxt Framework
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-3x">
                            {{ $service2 }}
                        </span>
                    </h2>
                </div>
                <!-- /2 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/php.svg);"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #6e81b6;"> PHP 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/1c_bitrix_logo.svg);background-color: transparent;background-size: 51%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #c60c30; "> 1c-Bitrix 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/1969px-Laravel.svg);background-color: transparent;background-size: 51%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #ff2d20;"> Laravel 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-3x">
                            {{ $service3 }}
                        </span>
                    </h2>
                </div>
                <!-- /3 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design1.jpg)"></div>
                            <div class="cell__img-inner styled__back" > Дизайн лого 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design2.jpg)"></div>
                            <div class="cell__img-inner styled__back" > Типографика
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design3.jpg)"></div>
                            <div class="cell__img-inner styled__back" > User eXperience 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design4.jpg)"></div>
                            <div class="cell__img-inner styled__back" >User Interface
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cell cell--text">
                    <h2 class="cell__title oh">
                        <span class="oh__inner text-3x">
                            {{ $service4 }}
                        </span>
                    </h2>
                </div>
                <!-- /4 -->
                <div class="cell cell--images">
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/audit1.png)"></div>
                            <div class="cell__img-inner styled__back" >Аудит проекта</div>
                        </div>
                    </div>
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/conversation1.png)"></div>
                            <div class="cell__img-inner styled__back" >Менторство</div>
                        </div>
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
                            <div class="cell__img-inner styled__back" >SVG-анимация
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-7 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/jquery-10-1175155.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >jQuery-эффекты, AJAX, chaining
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-8  -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/greensock.png);background-color: transparent;background-size: 82%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Advanced js-animation
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-9 строка2--> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-bootstrap-512.png);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div> 
                            <div class="cell__img-inner styled__back" style="background-color: #673ab7;">Bootstrap
                            
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-10 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-webpack-512.png);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #81d4fa">Webpack
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-11 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/tw.svg);background-color: transparent;background-size: 92%;background-repeat: no-repeat;"></div> 
                            <div class="cell__img-inner styled__back" style="background-color: #06b6d4;">Tailwind CSS
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <!-- /1-12 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/pugjs_logo_icon_168890.png);background-color: transparent;background-size: 99%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #55322a">Pug
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-13 --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/gulp-226000.png);background-color: transparent;background-size: contain;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #d44945">Gulp
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-14 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/scss-512.png);background-color: transparent;background-size: 81%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" >Scss
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <!-- /1-15 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/lodash.svg);background-color: transparent;background-size: 71%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-color: #3492ff;"> Lodash 
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-16 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-git-512.png);background-color: transparent;"></div>
                            <div class="cell__img-inner styled__back" ><a href="https://github.com/klimov-rv" target="_blank" rel="noopener noreferrer">My Github <i class="fab fa-github-alt"></i></a>  
                                
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /1-17  --> 
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-visual-studio-code-2019-512.png);background-color: transparent;background-size: 99%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back" style="background-color: #0277bd">
                                <i class="fa fa-heart" aria-hidden="true"></i>  любимая IDE
                            </div>
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
                            <div class="cell__img-inner styled__back" style="background-image: linear-gradient(230deg, rgba(125,192,190,0.3), rgba(26,239,145,0.5));">NodeJS 
                                <a href="/portfolio/" class="case-link">  
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    <div class="case-text">Cases </div>
                                </a>
                            </div> 
                        </div>
                    </div>
                    <!-- /2-5 -->
                    <!-- /2-6 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/icons8-wordpress.svg);background-color: transparent;background-size: 83%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"  style="background-image: linear-gradient(230deg, rgba(138, 125, 192, 0.3), #00305518);"> WordPress
                            </div>
                        </div>
                    </div>
                    <!-- /2-7 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/icons/docker.svg);background-color: transparent;background-size: 83%;background-repeat: no-repeat;"></div>
                            <div class="cell__img-inner styled__back"> Docker  
                            </div>
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
                <div class="grid grid-3cols">
                    <!-- /3-5 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design5.jpg)"></div>
                            <div class="cell__img-inner styled__back" > Айдентика</div>
                        </div>
                    </div>
                    <!-- /3-6 -->
                    <div class="cell__img persp">
                        <div class="persp-box"> 
                            <div class="cell__img-inner styled__front" style="background-image: url(images/design6.jpg)"></div>
                            <div class="cell__img-inner styled__back" > Имиджевый сайт</div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- /4 -->
            <div class="preview__item">
                <h2 class="preview__item-title oh"><span class="oh__inner">{{ $service4 }}</span></h2>
                <div class="grid grid-2cols">
                 
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
</body>

</html>
