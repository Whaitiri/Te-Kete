@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create Permissions</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('permissions.create')}}" class="button"> <i class="fa fa-permissions-add"></i> Create permissions</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<form action="{{route('permissions.store')}}" method="POST">
						{{csrf_field()}}

						<div class="block">
							<b-radio v-model="permissionType" native-value="basic">Basic Permission</b-radio>
							<b-radio v-model="permissionType" native-value="crud">CRUD Permission</b-radio>
						</div>

						<div class="field" v-if="permissionType == 'basic'">>
							<label for="display_name" class="label">Display Name</label>
							<p class="control">
								<input type="text" class="input" name="display_name" id="display_name">
							</p>
						</div>

						<div class="field" v-if="permissionType == 'basic'">>
							<label for="slug" class="label">Slug</label>
							<p class="control">
								<input type="text" class="input" name="name" id="name">
							</p>
						</div>

						<div class="field" v-if="permissionType == 'basic'">>
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description">
							</p>
						</div>


						<button class="button is-success m-t-10">Create permissions</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
