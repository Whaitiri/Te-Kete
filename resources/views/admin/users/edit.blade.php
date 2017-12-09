@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$user->name}}</h1>
			<h4 class="subtitle">Edit User</h4>
		</div>
		<div class="column is-one-fifth">
			<a href="{{ URL::previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('users.update', $user->id)}}" method="POST">
		{{method_field('PUT')}}
		{{csrf_field()}}
		<div class="columns">
			<div class="column">
				<div class="card">
					<div class="card-content">



							<div class="field">
								<label for="name" class="label">Name</label>
								<p class="control">
									<input type="text" class="input" name="name" id="name" value="{{$user->name}}">
								</p>
							</div>

							<div class="field">
								<label for="email" class="label">Email</label>
								<p class="control">
									<input type="text" class="input" name="email" id="email" value="{{$user->email}}">
								</p>
							</div>

							<div class="field">
								<label for="password" class="label">Password</label>
								<section>
									<div class="field">
										<b-radio v-model="password_options" class="is-small" native-value="keep">Do Not Change Password</b-radio>
									</div>
									<div class="field">
										<b-radio v-model="password_options" class="is-small" native-value="auto">Generate New Password</b-radio>
									</div>
									<div class="field">
										<b-radio v-model="password_options" class="is-small" native-value="manual">Set New Password</b-radio>
										<p class="control m-t-10">
											<label for="password" class="is-small label" v-if="password_options == 'manual'">Enter Password</label>
											<input type="password" class="input" name="password" id="password" v-if="password_options == 'manual'" :disabled="auto_password">
										</p>
									</div>
								</section>

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
							<button class="button is-success">Edit User</button>
					</div>
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
				password_options: 'keep',
				rolesSelected: {!! $user->roles->pluck('id') !!}
			}
	  	});

	</script>
@endsection
