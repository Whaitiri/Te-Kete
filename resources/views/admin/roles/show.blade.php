@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$role->display_name}}</h1>
			<h4 class="subtitle">View Role</h4>
		</div>
		<div class="column is-one-fifth">
			<div class="columns">
				<div class="column">
					<a href="{{route('roles.edit', $role->id)}}" class="button">Edit Role</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">

					<div class="columns">
						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Display Name</label>
								<p class="control">
									<pre>{{$role->display_name}}</pre>
								</p>
							</div>
						</div>

						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Slug</label>
								<p class="control">
									<pre>{{$role->name}}</pre>
								</p>
							</div>
						</div>
					</div>

					<div class="field">
						<label for="name" class="label">Description</label>
						<p class="control">
							<pre>{{$role->description}}</pre>
						</p>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<h3 class="title is-4">Permissions:</h2>
							<ul class="m-l-10">
								@foreach ($role->permissions as $r)
									<li>{{$r->display_name}} <em class="m-l-20 is-4">{{$r->description}}</em></li>
								@endforeach
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
