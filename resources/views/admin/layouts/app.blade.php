@include('admin.layouts.components.header')
<body>
   <div id="app">
		@include('layouts.components.navbar')
      <div class="columns is-gapless">
         <div id="sidebarColumn" class="column is-one-fifth">
            @include('admin.layouts.components.sidebar')
         </div>
         <div class="column customBody">
            <div class="container is-fluid">
                  @yield('content')
            </div>
         </div>


		 </div>
   </div>
   @include('layouts.components.modal')
   @include('layouts.components.footer')
