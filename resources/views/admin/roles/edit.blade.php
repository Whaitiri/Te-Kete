@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">{{$role->display_name}}</h1>
			<h4 class="subtitle">Edit Roles</h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('roles.update', $role->id)}}" method="POST">

		{{csrf_field()}}
		{{method_field('PUT')}}

		<div class="columns">
			<div class="column">
				<div class="card customCard">
					<div class="card-content">

						<div class="columns">

							<div class="column is-one-half">
								<div class="field">
									<label for="display_name" class="label">Display Name</label>
									<p class="control">
										<input type="text" class="input" name="display_name" id="display_name" value="{{$role->display_name}}">
									</p>
								</div>
							</div>

							<div class="column is-one-half">
								<div class="field">
						        	<label for="name" class="label">Slug <small>(Cannot be changed)</small></label>
						        	<p class="control">
						         	<input type="text" class="input" name="name" id="name" value="{{$role->name}}" disabled>
						        	</p>
						      </div>
							</div>

						</div>

						<div class="field">
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description" value="{{$role->description}}">
							</p>
						</div>
						<input type="hidden" :value="permissionsSelected" name="permissions">

				</div>

					<div class="card customCard">
						<div class="card-content">
							<label for="permissions" class="label">Permissions</label>
								@foreach ($permissions as $permission)
	                      	<div class="field">
	                        	<b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em class="m-l-20"><small>({{$permission->description}})</small></em></b-checkbox>
								 	</div>
	                    	@endforeach

								<button class="button is-success m-t-10">Edit Role</button>
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
		     	permissionsSelected: {!!$role->permissions->pluck('id')!!}
			}
	  	});

	</script>
@endsection
