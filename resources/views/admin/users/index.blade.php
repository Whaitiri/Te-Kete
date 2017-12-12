@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('users.create')}}" class="button">Create User</a>
			<a href="{{route('admin.dashboard')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

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
						@foreach ($users as $user)
							<tr>
								<th>{{$user->id}}</th>
								<td><a href="{{ route('users.show', $user->id)}}">{{$user->name}}</a></td>
								<td>{{$user->email}}</td>
								<td>{{$user->created_at->toFormattedDateString()}} </td>
								<td>
									<a href="{{route('users.show', $user->id)}}" class="button is-small is-outlined">View</a>
									<a href="{{route('users.edit', $user->id)}}" class="button is-small is-outlined">Edit</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

		{{$users->links()}}
	</div>

@endsection
