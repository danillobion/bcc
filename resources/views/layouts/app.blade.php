<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('js/sobre.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <div class="style_container_menu_1">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <!--<a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        Menu
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin:10px; margin-bottom:0px;margin-top:5px">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('nl.sobre') }}">{{ __('Sobre') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('n1.curso') }}">{{ __('Curso') }}</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">
                                    <img class="card-img-top" src="/imagens/logo_ufape_bcc.png" alt="Card image cap" style="width:150px"> 
                                </a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('n1.localizar') }}">{{ __('Localizar') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('n1.contato') }}">{{ __('Contato') }}</a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                <!--@if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif-->
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container" style="margin-top: 15px;">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4E4E4; padding:10px;border-radius: 9px;" >
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                            Menu
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbar10">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item" style="color:#707070">
                                    <a class="nav-link" href="{{ route('nl.noticia') }}"  style="color:#707070">Notícias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.evento') }}"  style="color:#707070">Eventos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.projeto') }}"  style="color:#707070">Projetos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.professor') }}"  style="color:#707070">Professores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.laboratorio') }}"  style="color:#707070">Laboratórios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.documento') }}"  style="color:#707070">Documentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"  style="color:#707070">Mídia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.grupodepesquisa') }}"  style="color:#707070">Grupos de Pesquisa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div> 
        <div class="style_container_menu_2">
            <div class="container" style="margin-top: 15px;">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E4E4E4; padding:10px;border-radius: 9px;" >
                    <div class="container">
                        <a class="nav-link" href="{{ url('/') }}">
                            <img class="card-img-top" src="/imagens/logo_ufape_bcc.png" alt="Card image cap" style="width:90px"> 
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                            Menu
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbar10">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.sobre') }}">{{ __('Sobre') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('n1.curso') }}">{{ __('Curso') }}</a>
                                </li>
                                <li class="nav-item" style="color:#707070">
                                    <a class="nav-link" href="{{ route('nl.noticia') }}"  style="color:#707070">Notícias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.evento') }}"  style="color:#707070">Eventos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.projeto') }}"  style="color:#707070">Projetos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.professor') }}"  style="color:#707070">Professores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.laboratorio') }}"  style="color:#707070">Laboratórios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.documento') }}"  style="color:#707070">Documentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"  style="color:#707070">Mídia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nl.grupodepesquisa') }}"  style="color:#707070">Grupos de Pesquisa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('n1.localizar') }}">{{ __('Localizar') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('n1.contato') }}">{{ __('Contato') }}</a>
                                </li>
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                
                            @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>     
        </div>
        @guest
        @else
        <div class="container" style="margin-top: 15px;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8f8f8f; padding:10px;border-radius: 9px; ">
                <div class="container">
                    <div style="color: white; font-weight:600">Administrador do sistema: </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar110">
                        Menu
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar110">
                        <ul class="navbar-nav nav-fill w-100">
                            <ul class="navbar-nav ">
                                <li style="margin-left: 10px"><a href="{{ route('admin.index') }}"  style="color:#fff">Dashboard</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('noticia.admin.index') }}"  style="color:#fff">Notícias</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('projeto.admin.index') }}"  style="color:#fff">Projetos</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('evento.admin.index') }}"  style="color:#fff">Eventos</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('documento.admin.index') }}"  style="color:#fff">Documentos</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('laboratorio.admin.index') }}"  style="color:#fff">Laboratórios</a></li>
                                <li style="margin-left: 10px"><a href="{{ route('grupoDePesquisa.admin.index') }}"  style="color:#fff">Grupos de pesquisa</a></li>
                                <li style="margin-left: 10px">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff; cursor: pointer">
                                          Configuração
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="{{ route('sobre.admin.index') }}">Sobre</a>
                                          <a class="dropdown-item" href="#">Curso</a>
                                          <a class="dropdown-item" href="#">Localizar</a>
                                          <a class="dropdown-item" href="#">Contato</a>
                                        </div>
                                      </div>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        @endguest
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
