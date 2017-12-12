@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Permissions</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('permissions.create')}}" class="button">Create Permission</a>
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
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($permissions as $permission)
							<tr>
								<th>{{$permission->id}}</th>
								<td><a href="{{route('permissions.show', $permission->id)}}">{{$permission->display_name}}<br><small><em>({{$permission->name}})</em></small></a></td>
								<td>{{ str_limit($permission->description, $limit = 30, $end = '...') }}</td>
								<td>{{$permission->created_at->toFormattedDateString()}} </td>
								<td>
									<a href="{{route('permissions.show', $permission->id)}}" class="button is-small is-outlined">View</a>
									<a href="{{route('permissions.edit', $permission->id)}}" class="button is-small is-outlined">Edit</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

		{{-- {{$permissions->links()}} --}}
	</div>

@endsection
