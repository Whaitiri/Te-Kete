@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create Users</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{ URL::previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('users.store')}}" method="POST">
		{{csrf_field()}}

		<div class="columns">
			<div class="column">
				<div class="card">
					<div class="card-content">

							<div class="field">
								<label for="name" class="label">Name</label>
								<p class="control">
									<input type="text" class="input" name="name" id="name">
								</p>
							</div>

							<div class="field">
								<label for="email" class="label">Email</label>
								<p class="control">
									<input type="text" class="input" name="email" id="email">
								</p>
							</div>

							<div class="field">
								<label for="password" class="label">Password</label>
								<p class="control">
									<input type="password" class="input" name="password" id="password" :disabled="auto_password">
									<b-checkbox class="m-t-10" name="auto_generate" v-model="auto_password">Auto Generate Password</b-checkbox>
								</p>
							</div>

					</div>
				</div>

				<div class="card">
					<div class="card-content">
						<label for="roles" class="label">Roles</label>
						<input type="hidden" name="roles" :value="rolesSelected" />
						@foreach ($roles as $role)
							<div class="field">
								<b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}
									<em class="m-l-20"><small>({{$role->description}})</small></em>
								</b-checkbox>
							</div>
						@endforeach
						<button class="button is-success">Create User</button>
					</div>
			</div>
		</div>
	</form>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el:'#app',
		  	data: {
		     	auto_password: false,
				rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
			}
	  	});

	</script>
@endsection
