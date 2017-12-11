@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Posts</h1>
		</div>
		<div class="column is-one-fifth">
			<a href="{{route('posts.create')}}" class="button"> <i></i> Create Post</a>
		</div>
	</div>
	<hr class="m-t-0">


	<div class="columns is-multiline">
		@foreach ($posts as $post)
			<div class="column is-one-third">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h4 class="is-small title"><a href="{{route('posts.show', $post->id)}}">{{$post->display_name}}</a></h4>
								<h5 class="subtitle"><em>{{$post->name}}</em></h5>
								<p class="content">{{ str_limit($post->description, $limit = 30, $end = '...') }}</p>
								<div class="columns is-gapless is-mobile">
									<div class="column is-one-half">
										<a href="{{route('posts.show', $post->id)}}" class="button is-small is-success is-fullwidth is-outlined">View</a>
									</div>

									<div class="column is-one-half">
										<a href="{{route('posts.edit', $post->id)}}" class="button is-small is-fullwidth is-outlined">Edit</a>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		@endforeach
	</div>

		{{-- {{$posts->links()}} --}}
	</div>

@endsection
