	<aside id="adminSideMenu" class="sideMenu menu p-l-25 p-r-25 p-t-10 customAdmin">
		<p class="menu-label ">General</p>
		<ul class="menu-list">
			<li><a class="m-r-15 {{ Nav::isRoute('admin.dashboard')}}" href="{{route('admin.dashboard')}}">Dashboard</a></li>
		</ul>

		@permission('update-posts')
			<p class="menu-label ">Content</p>
			<ul class="menu-list">
				<li><a class="m-r-15 {{ Nav::isResource('posts')}}" href="{{route('posts.index')}}">Posts</a></li>
				<li><a class="m-r-15 {{ Nav::isResource('styles')}}" href="{{route('styles.index')}}">Customise</a></li>
			</ul>
		@endpermission

		@permission('create-users|create-acl')
			<p class="menu-label">Administration</p>
			<ul class="menu-list p-b-20">
				@permission('create-users')
					<li><a class="m-r-15 {{ Nav::isResource('users')}}"href="{{route('users.index')}}">Users</a></li>
				@endpermission
				@permission('create-acl')
					<li><a class="m-r-15 {{ Nav::isResource('roles')}}"href="{{route('roles.index')}}">Roles</a></li>
					<li><a class="m-r-15 {{ Nav::isResource('permissions')}}"href="{{route('permissions.index')}}">Permissions</a></li>
				@endpermission
			</ul>
		@endpermission
	</aside>
