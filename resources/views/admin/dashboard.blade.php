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
			<h2 class="subtitle">Admin Sections</h2>
			<hr class="m-t-0">
			@permission('create-posts')

				<div class="content level ">
							 This will allow you to create and edit posts
								<a href="{{route('posts.index')}}" class="button">Manage Posts</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-users')
				<div class="content level ">
				  			 This will allow you to create and edit users
							 	<a href="{{route('users.index')}}" class="button">Manage Users</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-acl')
				<div class="content level ">
							 This will allow you to create and edit roles
								<a href="{{route('roles.index')}}" class="button">Manage Roles</a>
				</div>
				<hr class="m-t-0">
			@endpermission

			@permission('create-acl')
				<div class="content level ">
							 This will allow you to create and edit permissions
								<a href="{{route('permissions.index')}}" class="button">Manage Permissions</a>
				</div>
				<hr class="m-t-0">
			@endpermission
		</div>
	</div>

@endsection
