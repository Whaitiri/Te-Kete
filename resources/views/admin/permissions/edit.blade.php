@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$permissions->name}}</h1>
			<h4 class="subtitle">Edit permissions</h4>
		</div>
		<div class="column is-one-fifth">
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<form action="{{route('permissions.update', $permissions->id)}}" method="POST">
						{{method_field('PUT')}}
						{{csrf_field()}}
						<div class="field">
							<label for="name" class="label">Name</label>
							<p class="control">
								<input type="text" class="input" name="name" id="name" value="{{$permissions->name}}">
							</p>
						</div>

						<div class="field">
							<label for="email" class="label">Email</label>
							<p class="control">
								<input type="text" class="input" name="email" id="email" value="{{$permissions->email}}">
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

						<button class="button is-success m-t-10">Edit permissions</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
