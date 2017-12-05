@include('layouts.components.htmlHead')
<body>
    <div id="app">
   @include('layouts.components.header')
      <div class="container">
         @yield('content')
      </div>


   @include('layouts.components.footer')
    </div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
