@extends('layouts.app')

@section('content')

<div class="card customCard">
   <div class="card-content">
		<h1>Blogs</h1>
		<p>We help heaps of community groups here are some blog posts.</p>
	</div>
</div>
@foreach ($posts as $post)
		<div class="card customCard m-t-10">
		   <div class="card-content">
				{{$post->title}}
			</div>
		</div>
@endforeach
@endsection
