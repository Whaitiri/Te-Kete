@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage permissions</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('permissions.create')}}" class="button"> <i></i> Create permissions</a>
		</div>
	</div>
	<hr class="m-t-0">

		<div class="card m-b-20">
			<div class="card-content">
				<table class="table adminTable is-narrow">
					<thead>
						<tr>
							<th>id</th>
							<th>Display Name</th>
							<th>Slug</th>
							<th>Description</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($permissions as $permission)
							<tr>
								<th>{{$permission->id}}</th>
								<td><a href="#">{{$permissions->display_name}}</a></td>
								<td>{{$permission->name}}</td>
								<td>{{$permission->description}}</td>
								<td>{{$permission->created_at->toFormattedDateString()}} </td>
								<td><a href="#" class="button is-outlined">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		{{-- {{$permissions->links()}} --}}
	</div>

@endsection
