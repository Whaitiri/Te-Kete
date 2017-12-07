@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$permission->name}}</h1>
			<h4 class="subtitle">Edit permissions</h4>
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

					<form action="{{route('permissions.update', $permission->id)}}" method="POST">
						{{method_field('PUT')}}
						{{csrf_field()}}
						<div class="field">
							<label for="display_name" class="label">Display Name</label>
							<p class="control">
								<input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
							</p>
						</div>

						<div class="field">
				        	<label for="name" class="label">Slug <small>(Cannot be changed)</small></label>
				        	<p class="control">
				         	<input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
				        	</p>
				      </div>

						<div class="field">
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description" value="{{$permission->description}}">
							</p>
						</div>

						<button class="button is-success m-t-10">Edit permissions</button>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
