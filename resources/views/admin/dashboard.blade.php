@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Admin Dashboard</h1>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="card m-b-20">
		<div class="card-content">
			@permission('create-posts')

				<div class="content level ">
							 Allows you to create and edit blog posts that can be publish to the site's front.
								<a href="{{route('posts.index')}}" class="button">Manage Posts</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-users')
				<div class="content level ">
				  			 This will allow you to create and edit users, and assign roles to them.
							 	<a href="{{route('users.index')}}" class="button">Manage Users</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-acl')
				<div class="content level ">
							 This will allow you to create and edit roles, to assign groups of permissions to users.
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
