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

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<form action="{{route('users.store')}}" method="POST">
						{{csrf_field()}}
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

						<button class="button is-success m-t-10">Create User</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el:'#app',
		  	data: {
		     	auto_password: false
			}
	  	});

	</script>
@endsection
