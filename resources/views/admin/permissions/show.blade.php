@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$permissions->name}}</h1>
			<h4 class="subtitle">View permissions</h4>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('permissions.edit', $permission->id)}}" class="button"><i class="fa fa-permissions-add"></i>Edit permissions</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">

					<div class="field">
						<label for="name" class="label">Name</label>
						<p class="control">
							<pre>{{$permissions->name}}</pre>
						</p>
					</div>

					<div class="field">
						<label for="email" class="label">Email</label>
						<p class="control">
							<pre>{{$permissions->email}}</pre>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
