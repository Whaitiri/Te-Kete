@include('admin.layouts.components.header')
<body>
   <div id="app">
		@include('layouts.components.navbar')
      <div class="columns">
         <div id="sidebarColumn" class="column is-one-fifth is-gapless">
            @include('admin.layouts.components.sidebar')
         </div>
         <div class="column">
            <div class="container is-fluid">
                  @yield('content')
            </div>
         </div>



		 </div>
   </div>
   @include('layouts.components.footer')
