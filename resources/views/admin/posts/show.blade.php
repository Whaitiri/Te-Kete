@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$post->display_name}}</h1>
			<h4 class="subtitle">View Post</h4>
		</div>
		<div class="column is-one-fifth">
			<div class="columns">
				<div class="column">
					<a href="{{route('posts.edit', $post->id)}}" class="button">Edit Post</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-t-0">

	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">

					<div class="columns">
						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Display Name</label>
								<p class="control">
									<pre>{{$post->display_name}}</pre>
								</p>
							</div>
						</div>

						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Slug</label>
								<p class="control">
									<pre>{{$post->name}}</pre>
								</p>
							</div>
						</div>
					</div>

					<div class="field">
						<label for="name" class="label">Description</label>
						<p class="control">
							<pre>{{$post->description}}</pre>
						</p>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<label for="permissions" class="label">Permissions</label>
							<ul>
								@foreach ($post->permissions as $r)
									<li>{{$r->display_name}} <em class="m-l-20 is-4">{{$r->description}}</em></li>
								@endforeach
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
