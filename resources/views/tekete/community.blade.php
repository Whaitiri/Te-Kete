@extends('layouts.app')

@section('content')

<div class="card customCard">
   <div class="card-content">
		<h1 class="title">Community Groups</h1>
		<p>We work with a large number of community and charity groups throughout New Zealand. Here we signal boost the most important causes we can find.</p>
	</div>
</div>
@foreach ($posts as $post)
		<div class="card customCard m-t-10">
			<div class="card-content">
				<h2 class="title"><a href="/{{$post->slug}}">{{$post->title}}</a></h2>
				<h2 class="subtitle">{{$post->subtitle}}<br>
				<small><p>Posted by: {{$post->user->name}}		On: {{$post->created_at}}</p></small></h2>
				<div class="content postContent">{!!html_entity_decode($post->content)!!}</div>
			</div>
		</div>
@endforeach
@endsection
