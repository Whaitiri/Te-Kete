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
				<th>Title<br><small><em>(Slug)</em></small></th>
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
					<td>
						<strong>{{$post->title}}</strong>
						<br><small><em>(<a href="/{{$post->slug}}">{{$post->slug}}</a>)</em></small>
					</td>
					<td class="contentCell">{{$post->subtitle}}</td>
					<td>{{ $users->where('id', $post->author_id)->first()->name }}</td>
					<td>{{$post->created_at}} </td>
					<td class="contentCell">
						<p>{{ str_limit($post->content, $limit = 40, $end = '...') }}</p>
					</td>
					<td>
						<a href="{{route('posts.show', $post->id)}}" class="button is-small is-outlined">View</a>
						<a href="/{{$post->slug}}" class="button is-small is-outlined">View2</a>
						<a href="{{route('posts.edit', $post->id)}}" class="button is-small is-outlined">Edit</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


		{{$posts->links()}}
	</div>

@endsection
