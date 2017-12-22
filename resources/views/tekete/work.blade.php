@extends('layouts.app')

@section('content')

<div class="card customCard">
   <div class="card-content">
		<h1>Work</h1>
		<p>Here is our work</p>
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
