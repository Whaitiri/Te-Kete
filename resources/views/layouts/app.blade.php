@include('layouts.components.header')
<body>
    <div id="app">
   @include('layouts.components.navbar')
      <div class="container customBody">
         @yield('content')
      </div>


   @include('layouts.components.footer')
