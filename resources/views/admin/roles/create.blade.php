@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create New Role</h1>
			<h4 class="subtitle"></h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('roles.store')}}" method="POST">
		{{csrf_field()}}

		<div class="columns">
			<div class="column">
				<div class="card">
					<div class="card-content">

						<div class="columns">

							<div class="column is-one-half">
								<div class="field">
									<label for="display_name" class="label">Display Name</label>
									<p class="control">
										<input type="text" class="input" name="display_name" id="display_name">
									</p>
								</div>
							</div>

							<div class="column is-one-half">
								<div class="field">
									<label for="name" class="label">Slug</label>
									<p class="control">
										<input type="text" class="input" name="name" id="name">
									</p>
								</div>
							</div>

						</div>

						<div class="field">
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description">
							</p>
						</div>
						<input type="hidden" :value="permissionsSelected" name="permissions">

				</div>

					<div class="card">
						<div class="card-content">
							<h2 class="title is-4">Permissions:</h2>
								@foreach ($permissions as $permission)
									<div class="field">
										<b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em class="m-l-20"><small>({{$permission->description}})</small></em></b-checkbox>
									</div>
								@endforeach

								<button class="button is-success m-t-10">Create Role</button>
						</div>
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
		     	permissionsSelected: []
			}
	  	});

	</script>
@endsection
