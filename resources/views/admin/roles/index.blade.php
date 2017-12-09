@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Roles</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('roles.create')}}" class="button"> <i></i> Create Role</a>
		</div>
	</div>
	<hr class="m-t-0">


	<div class="columns is-multiline">
		@foreach ($roles as $role)
			<div class="column is-one-third">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h4 class="is-small title"><a href="{{route('roles.show', $role->id)}}">{{$role->display_name}}</a></h4>
								<h5 class="subtitle"><em>{{$role->name}}</em></h5>
								<p class="content">{{ str_limit($role->description, $limit = 30, $end = '...') }}</p>
								<div class="columns is-gapless is-mobile">
									<div class="column is-one-half">
										<a href="{{route('roles.show', $role->id)}}" class="button is-small is-success is-fullwidth is-outlined">View</a>
									</div>

									<div class="column is-one-half">
										<a href="{{route('roles.edit', $role->id)}}" class="button is-small is-fullwidth is-outlined">Edit</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		@endforeach
	</div>

		{{-- {{$roles->links()}} --}}
	</div>

@endsection
