@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">Manage Posts</h1>
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
				<th>Type</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>{{$post->title}}
						<br><small><em>({{$post->slug}})</em></small>
					</td>
					<td class="contentCell">{{$post->subtitle}}</td>
					<td>{{ $users->where('id', $post->author_id)->first()->name }}</td>
					<td>{{$post->created_at}} </td>
					<td>
						@if ($post->type == 0)
							Community
						@elseif ($post->type == 1)
							Work
						@else
							None
						@endif
					</td>
					<td>
						@if ($post->status == 0)
							Draft
						@elseif ($post->status == 1)
							Published
						@else
							None
						@endif
					</td>
					<td>
						<a href="{{route('posts.show', $post->id)}}" class="button is-small is-outlined">View</a>
						<a href="/{{$post->slug}}" class="button is-small is-outlined">Page View</a>
						<a href="{{route('posts.edit', $post->id)}}" class="button is-small is-outlined">Edit</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>


		{{$posts->links()}}
	</div>

@endsection
