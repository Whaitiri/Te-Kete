@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">Admin Dashboard</h1>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="card customCard">
		<div class="card-content">

			@permission('create-posts')
				<div class="content level ">
							 This allows you to create and edit blog posts that can be publish to the site's front.
								<a href="{{route('posts.index')}}" class="button">Manage Posts</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('update-styles')
				<div class="content level ">
				  			 This allows you to customise the styling of the site.
							 	<a href="{{route('styles.index')}}" class="button">Manage Styles</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('read-contact')
				<div class="content level ">
							 This allows you to view messages left on the Contact section of the site.
								<a href="{{route('styles.index')}}" class="button">Manage Contact Messages</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-users')
				<div class="content level ">
				  			 This allows you to create and edit users, and assign roles to them.
							 	<a href="{{route('users.index')}}" class="button">Manage Users</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-acl')
				<div class="content level ">
							 This allows you to create and edit roles, to assign groups of permissions to users.
								<a href="{{route('roles.index')}}" class="button">Manage Roles</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-acl')
				<div class="content level ">
							 This will allow you to create and edit the permissions that roles are made up of.
								<a href="{{route('permissions.index')}}" class="button">Manage Permissions</a>
				</div>
				<hr class="m-t-0">
			@endpermission
		</div>
	</div>

@endsection
