@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$permission->name}}</h1>
			<h4 class="subtitle">View permissions</h4>
		</div>
		<div class="column is-one-fifth">
			<div class="columns">
				<div class="column">
					<a href="{{route('permissions.edit', $permission->id)}}" class="button">Edit permissions</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">

					<div class="field">
						<label for="name" class="label">Display Name</label>
						<p class="control">
							<pre>{{$permission->display_name}}</pre>
						</p>
					</div>

					<div class="field">
						<label for="name" class="label">Slug</label>
						<p class="control">
							<pre>{{$permission->name}}</pre>
						</p>
					</div>

					<div class="field">
						<label for="name" class="label">Description</label>
						<p class="control">
							<pre>{{$permission->description}}</pre>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
