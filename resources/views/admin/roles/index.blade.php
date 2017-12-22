@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Roles</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('roles.create')}}" class="button">Create Role</a>
			<a href="{{route('admin.dashboard')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

	<table class="table adminTable is-narrow">
		<thead>
			<tr>
				<th>id</th>
				<th>Display Name<br><small><em>(Slug)</em></small></th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($roles as $role)
				<tr>
					<th>{{$role->id}}</th>
					<td>{{$role->display_name}}<br><small><em>({{$role->name}})</em></small></td>
					<td>{{$role->description}} </td>
					<td>
						<a href="{{route('roles.show', $role->id)}}" class="button is-small is-outlined">View</a>
						<a href="{{route('roles.edit', $role->id)}}" class="button is-small is-outlined">Edit</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	</div>

@endsection
