@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create Roles</h1>
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
					<form action="{{route('roles.store')}}" method="POST">
						{{csrf_field()}}

						<div class="block">
							<b-radio v-model="roleType" name="roleType" native-value="basic">Basic Role</b-radio>
							<b-radio v-model="roleType" name="roleType" native-value="crud">CRUD Role</b-radio>
						</div>

						<div class="field" v-if="roleType == 'basic'">
							<label for="display_name" class="label">Display Name</label>
							<p class="control">
								<input type="text" class="input" name="display_name" id="display_name">
							</p>
						</div>

						<div class="field" v-if="roleType == 'basic'">
							<label for="slug" class="label">Slug</label>
							<p class="control">
								<input type="text" class="input" name="name" id="name">
							</p>
						</div>

						<div class="field" v-if="roleType == 'basic'">
							<label for="description" class="label">Description</label>
							<p class="control">
								<input type="text" class="input" name="description" id="description">
							</p>
						</div>

						<div class="field" v-if="roleType == 'crud'">
							<label for="resource" class="label">Resource</label>
							<p class="control">
								<input type="text" class="input" name="resource" id="resource" v-model="resource">
							</p>
						</div>

						<div class="columns" v-if="roleType == 'crud'">
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
						<button class="button is-success m-t-10">Create roles</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
