@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$role->display_name}}</h1>
			<h4 class="subtitle">Edit Roles</h4>
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

					<form action="{{route('roles.update', $role->id)}}" method="POST">
						{{method_field('PUT')}}
						{{csrf_field()}}

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

				</div>
				<div class="card">
					<div class="card-content">
						<h2 class="title is-4">Permissions:</h2>
								@foreach ($permissions as $permission)
                      <div class="field">
                        <b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em class="m-l-20"><small>({{$permission->description}})</small></em></b-checkbox>
							 </div>
                    @endforeach
							<button class="button is-success m-t-10">Edit Role</button>
							</form>
					</div>

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
		     	permissionsSelected: {!!$role->permissions->pluck('id')!!}
			}
	  	});

	</script>
@endsection
