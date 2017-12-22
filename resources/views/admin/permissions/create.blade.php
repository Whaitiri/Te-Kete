@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create Permissions</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card customCard">
				<div class="card-content">
					<form action="{{route('permissions.store')}}" method="POST">
						{{csrf_field()}}

						<div class="block">
							<b-radio v-model="permissionType" name="permissionType" native-value="basic">Basic Permission</b-radio>
							<b-radio v-model="permissionType" name="permissionType" native-value="crud">CRUD Permission</b-radio>
						</div>

						<div class="field" v-if="permissionType == 'basic'">
							<label for="display_name" class="label">Display Name</label>
							<p class="control">
								<input type="text" class="input" name="display_name" id="display_name">
							</p>
						</div>

						<div class="field" v-if="permissionType == 'basic'">
							<label for="slug" class="label">Slug</label>
							<p class="control">
								<input type="text" class="input" name="name" id="name">
							</p>
						</div>

						<div class="field" v-if="permissionType == 'basic'">
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description">
							</p>
						</div>

						<div class="field" v-if="permissionType == 'crud'">
							<label for="resource" class="label">Resource</label>
							<p class="control">
								<input type="text" class="input" name="resource" id="resource" v-model="resource">
							</p>
						</div>

						<div class="columns" v-if="permissionType == 'crud'">
							<div class="column">
								<div class="field">
									<b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
								</div>
								<div class="field">
									<b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
								</div>
								<div class="field">
									<b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
								</div>
								<div class="field">
									<b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
								</div>
							</div>


							<input type="hidden" name="crud_selected" :value="crudSelected">

							<div class="column is-two-thirds">
								<table class="table">
									<thead>
										<th class="is-small">Name</th>
										<th class="is-small">Slug</th>
										<th class="is-small">Description</th>
									</thead>
									<tbody v-if="resource.length >= 3">
										<tr class="is-small" v-for="item in crudSelected">
											<td class="is-small" v-text="crudName(item)"></td>
											<td class="is-small" v-text="crudSlug(item)"></td>
											<td class="is-small" v-text="crudDescription(item)"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<button class="button is-success m-t-10">Create permissions</button>
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
				permissionType: 'basic',
				resource: '',
				crudSelected: ['create','read','update','delete'],
			},
			methods: { //these methods are for permission creation.
				crudName: function(item) {
					return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
				},
				crudSlug: function(item) {
					return item.toLowerCase() + "-" + app.resource.toLowerCase();
				},
				crudDescription: function(item) {
					return "Allows a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
				}
		  }
	  	});

	</script>
@endsection
