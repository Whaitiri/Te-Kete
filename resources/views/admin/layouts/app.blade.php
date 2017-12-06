@include('admin.layouts.components.header')
<body>
   <div id="app">
		@include('layouts.components.navbar')

      @include('admin.layouts.components.sidebar')
		 <div class="container">
			 @yield('content')
		 </div>
   @include('layouts.components.footer')
