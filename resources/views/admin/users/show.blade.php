@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$user->name}}</h1>
			<h4 class="subtitle">View User</h4>
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

					<div class="field">
						<label for="role" class="label">Roles</label>
						<p class="control">
								<ul class="content">
									{{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
									@foreach ($user->roles as $role)
										<div class="columns">
											<div class="column is-one-fifth">
												<li>{{$role->display_name}}</li>
											</div>
											<div class="column">
												<li><small><em>{{$role->description}}</em></small></li>
											</div>
										</div>
									@endforeach
								</ul>
						</p>
					</div>


				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<a href="{{route('users.edit', $user->id)}}" class="button is-medium is-outlined">Edit</a>
					<a href="{{route('users.index')}}" class="button is-outlined is-medium is-pulled-right">Go Back</a>
				</div>
			</div>
		</div>
	</div>

@endsection
