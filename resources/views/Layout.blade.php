<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>NSA On-line</title>
</head>
<body>
  <header>
    <div class="container d-flex justify-content-between align-items-center">
      {{-- Navbar header --}}
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container-fluid p-0">
          {{-- Logo --}}
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo-nsa.png') }}" alt="logo" width="70">
          </a>
          {{-- Mobile menu button --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-header" aria-controls="menu-header" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>

          {{-- Menu links --}}
          <div class="collapse navbar-collapse" id="menu-header">
            <div class="navbar-nav">
              <a class="nav-link @if ($active_menu_header == 'home') active @endif" href="{{ route('home') }}">Início</a>
              <a class="nav-link @if ($active_menu_header == 'trabalhos') active @endif" href="{{ route('list.work') }}">Trabalhos</a>
              <a class="nav-link @if ($active_menu_header == 'materias') active @endif" href="{{ route('list.subject') }}">Materias</a>
              <a class="nav-link @if ($active_menu_header == 'professores') active @endif" href="{{ route('list.teacher') }}">Professores</a>
              <a class="nav-link @if ($active_menu_header == 'alunos') active @endif" href="{{ route('list.student') }}">Alunos</a>
              <a class="nav-link @if ($active_menu_header == 'salas') active @endif" href="{{ route('list.classroom') }}">Salas</a>
              <a class="nav-link disabled" disabled href="#">Notas</a>
              <a class="nav-link config @if ($active_menu_header == 'configurações') active @endif" href="{{ route('config', ['user' => 1]) }}">Configurações</a>
              <a class="nav-link logout" href="#">Sair</a>
            </div>
          </div>

        </div>
      </nav>

      {{-- Header area right --}}
      <div class="user-right-header">
        <div class="welcome">
          <span>Bem-Vindo</span>
          <span>nsaonline@tcc.com</span>
        </div>

        {{-- Avatar icon --}}
        <div class="avatar">
          <i class="bi bi-person"></i>

          {{-- Avatar menu --}}
          <div class="menu-avatar d-none">
            <a href="{{ route('config', ['user' => 1]) }}">Configurações</a>
            <a class="logout" href="#">Sair</a>
          </div>
        </div>

      </div>
    </div>
  </header>

  {{-- Submenu --}}
  <div class="sub-menu d-flex justify align-items-center">
    <div class="container">
      <div class="d-flex align-items-center">
        {{-- Submneu icon --}}
        <div class="icon-area">
          @yield('icon_title')
        </div>
        {{-- Submenu title --}}
        <div class="title">
          <span>ADMINISTRAÇÃO</span>
          <span>@yield('title_page')</span>
        </div>
      </div>

      {{-- Submenu actions --}}
      <div class="actions">
        {{-- Filter button --}}
        <button type="button" class="btn-filter btn btn-outline-cyan">
          <i class="bi bi-funnel-fill"></i>
        </button>
        {{-- Add button --}}
        <a href="@yield('cta_route')" class="btn btn-add btn-outline-cyan">@yield('cta_btn')</a>
      </div>
    </div>
  </div>

  <div class="container">
    {{-- Page content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      {{-- Footer copyright --}}
      <p class="col-md-4 col-12 mb-0 text-muted">&copy; 2022 NSA on-line, Inc</p>

      {{-- Footer icon --}}
      <a href="{{ route('home') }}" class="col-md-4 col-12 d-flex align-items-center justify-content-center mb-md-0 me-md-auto link-dark text-decoration-none">
        <img src="{{ asset('img/logo-nsa.png') }}" alt="logo" width="70">
      </a>

      {{-- Footer menu --}}
      <ul class="nav col-md-4 col-12 justify-content-end">
        <div class="col row">
          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2">Início</a></li>
              <li class="nav-item"><a href="{{ route('list.work') }}" class="nav-link px-2">Trabalhos</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link px-2 disabled">Notas</a></li>
              <li class="nav-item"><a href="{{ route('list.subject') }}" class="nav-link px-2">Materias</a></li>
            </ul>
          </div>
        </div>

        <div  class="col row">
          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{ route('list.classroom') }}" class="nav-link px-2">Salas</a></li>
              <li class="nav-item"><a href="{{ route('list.student') }}" class="nav-link px-2">Alunos</a></li>
            </ul>
          </div>

          <div class="col">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{ route('list.teacher') }}" class="nav-link px-2">Professores</a></li>
              <li class="nav-item"><a href="{{ route('config', ['user' => 1]) }}" class="nav-link px-2">Configurações</a></li>
            </ul>
          </div>
        </div>
      </ul>
    </footer>
  </div>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
