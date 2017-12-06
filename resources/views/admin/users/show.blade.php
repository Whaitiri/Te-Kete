@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$user->name}}</h1>
			<h4 class="subtitle">View User</h4>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('users.edit', $user->id)}}" class="button"><i class="fa fa-user-add"></i>Edit User</a>
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
							<pre>{{$user->name}}</pre>
						</p>
					</div>

					<div class="field">
						<label for="email" class="label">Email</label>
						<p class="control">
							<pre>{{$user->email}}</pre>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
