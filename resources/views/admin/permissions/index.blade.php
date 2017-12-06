@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage permissions</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('permissions.create')}}" class="button"> <i class="fa fa-permissions-add"></i> Create permissions</a>
		</div>
	</div>
	<hr class="m-t-0">

		<div class="card m-b-20">
			<div class="card-content">
				<table class="table adminTable is-narrow">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($permissions as $permission)
							<tr>
								<th>{{$permissions->id}}</th>
								<td><a href="{{ route('permissions.show', $permissions->id)}}">{{$permissions->name}}</a></td>
								<td>{{$permissions->email}}</td>
								<td>{{$permissions->created_at->toFormattedDateString()}} </td>
								<td><a href="{{route('permissions.edit', $permissions->id)}}" class="button is-outlined">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		{{$permissions->links()}}
	</div>

@endsection
