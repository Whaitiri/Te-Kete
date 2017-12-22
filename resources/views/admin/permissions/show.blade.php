@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">{{$permission->display_name}}</h1>
			<h4 class="subtitle">View Permission</h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('permissions.edit', $permission->id)}}" class="button">Edit Permission</a>
			<a href="{{route('permissions.index')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card customCard">
				<div class="card-content">

					<div class="columns">
						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Display Name</label>
								<p class="control">
									<pre>{{$permission->display_name}}</pre>
								</p>
							</div>
						</div>

						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Slug</label>
								<p class="control">
									<pre>{{$permission->name}}</pre>
								</p>
							</div>
						</div>
					</div>

					<div class="field">
						<label for="name" class="label">Description</label>
						<p class="control">
							<pre>{{$permission->description}}</pre>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
