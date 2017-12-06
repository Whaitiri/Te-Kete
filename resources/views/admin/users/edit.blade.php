@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$user->name}}</h1>
			<h4 class="subtitle">Edit User</h4>
		</div>
		<div class="column is-one-fifth">
			{{-- <a href="{{route('users.create')}}" class="button"> <i class="fa fa-user-add"></i> Create User</a> --}}
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<form class="" action="{{route('users.update', $user->id)}}" method="POST">
						{{method_field('PUT')}}
						{{csrf_field()}}
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

						<button class="button is-success m-t-10">Edit User</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
