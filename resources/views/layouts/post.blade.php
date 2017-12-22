@extends('layouts.app')

@section('content')

		<div class="card customCard">
			<div class="card-content">
				<h2 class="title">{{$post->title}}</h2>
				<h2 class="subtitle">{{$post->subtitle}}<br>
				<small><p>Posted by: {{$post->user->name}}		On: {{$post->created_at}}</p></small></h2>
				<div class="content postContent">{!!html_entity_decode($post->content)!!}</div>
				{{$user->name}}
			</div>
		</div>

@endsection
