@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$post->display_name}}</h1>
			<h4 class="subtitle">View Post</h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('posts.edit', $post->id)}}" class="button">Edit Post</a>
			<a href="{{route('posts.index')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">


		<div class="card">
			<div class="card-content">
				<h2 class="title">{{$post->title}}</h2>
				<h3 class="subtitle">{{$post->subtitle}}</h3>
				<p>Author: {{ $user->name }}</p>
				<p>Posted: {{$post->created_at}}</p><br>
				<div class="content">{!!html_entity_decode($post->content)!!}</div>
			</div>
		</div>

@endsection
