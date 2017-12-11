	<aside id="adminSideMenu" class="sideMenu menu p-l-25 p-r-25 p-t-10">
		<p class="menu-label ">General</p>
		<ul class="menu-list">
			<li><a class="m-r-15 {{ Nav::isRoute('admin.dashboard')}}" href="{{route('admin.dashboard')}}">Dashboard</a></li>
		</ul>

		<p class="menu-label ">Content</p>
		<ul class="menu-list">
			<li><a class="m-r-15 {{ Nav::isRoute('admin.dashboard')}}" href="{{route('posts.index')}}">Posts</a></li>
		</ul>


		<p class="menu-label">Administration</p>
		<ul class="menu-list p-b-20">
			<li><a class="m-r-15 {{ Nav::isResource('users')}}"href="{{route('users.index')}}">Users</a></li>
			<li><a class="m-r-15 {{ Nav::isResource('roles')}}"href="{{route('roles.index')}}">Roles</a></li>
			<li><a class="m-r-15 {{ Nav::isResource('permissions')}}"href="{{route('permissions.index')}}">Permissions</a></li>
		</ul>
	</aside>
