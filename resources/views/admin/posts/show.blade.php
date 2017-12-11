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
									<pre>{{$post->title}}</pre>
								</p>
							</div>
						</div>

						<div class="column is-one-half">
							<div class="field">
								<label for="name" class="label">Slug</label>
								<p class="control">
									<pre>{{$post->subtitle}}</pre>
								</p>
							</div>
						</div>
					</div>

					<div class="field">
						<label for="name" class="label">Description</label>
						<p class="control">
							<pre>{{$user->name}}</pre>
						</p>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>

@endsection
