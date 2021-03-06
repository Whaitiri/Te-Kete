@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">{{$role->display_name}}</h1>
			<h4 class="subtitle">View Role</h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('roles.edit', $role->id)}}" class="button">Edit Role</a>
			<a href="{{route('roles.index')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card customCard">
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
				<div class="card customCard">
					<div class="card-content">
						<label for="permissions" class="label">Permissions</label>
							<ul>
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
