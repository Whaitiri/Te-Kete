@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Posts</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('posts.create')}}" class="button">Create Post</a>
			<a href="{{route('admin.dashboard')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">

	<table class="table adminTable is-narrow">
		<thead>
			<tr>
				<th>Title</th>
				<th>Subtitle</th>
				<th>Author</th>
				<th>Posted</th>
				<th>Content</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($posts as $post)
				<tr>
					<th>{{$post->title}}
						@if ($post->title != $post->slug)
							<br><small>{{$post->slug}}</small>
						@endif
					</th>
					<td>{{$post->subtitle}}</td>
					<td>{{ $users->where('id', $post->author_id)->first()->name }}</td>
					<td>{{$post->created_at}} </td>
					<td>
						{{ str_limit($post->content, $limit = 100, $end = '...') }}
					</td>
					<td>
						<a href="{{route('posts.show', $post->id)}}" class="button is-small is-outlined">View</a>
						<a href="{{route('posts.edit', $post->id)}}" class="button is-small is-outlined">Edit</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


	{{-- <div class="columns is-multiline">
		@foreach ($posts as $post)
			<div class="column is-one-third">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h4 class="is-small title"><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h4>
								<h5 class="subtitle"><em>{{$post->subtitle}}</em></h5>
								<p class="content">{{ str_limit($post->content, $limit = 200, $end = '...') }}</p>
								<p class="content">{{$post->id}}</p>
								<p class="content">{{$post->slug}}</p>
								<p class="content">{{$post->author_id}}</p>
								<p class="content">{{$post->status}}</p>
								<p class="content">{{$post->type}}</p>
								<p class="content">{{$post->comment_count}}</p>
								<p class="content">{{$post->published_at}}</p>
								<p class="content">{{$post->created_at}}</p>
								<p class="content">{{$post->updated_at}}</p>
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
	</div> --}}

		{{-- {{$posts->links()}} --}}
	</div>

@endsection
