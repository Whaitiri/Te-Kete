<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Te Kete') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
          <div class="container">
            <div class="navbar-brand">
              <a href="#" class="navbar-item">Te Kete</a>
              <button class="button navbar-burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
            <div class="navbar-menu" id="navMenu">
              <div class="navbar-start">
              </div>
              <div class="navbar-end">
                <a href="#" class="navbar-item">Home</a>
                <a href="#" class="navbar-item">Community</a>
                <a href="#" class="navbar-item">Work</a>
                <a href="#" class="navbar-item">People</a>
                <a href="#" class="navbar-item">Contact</a>
              </div>
            </div>
          </div>

        </nav>
        @yield('content')
    </div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
