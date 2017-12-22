@extends('layouts.app')

@section('content')

		<div class="card customCard">
			<div class="card-content">
				<div class="content">{!!html_entity_decode($post->content)!!}</div>
			</div>
		</div>

@endsection
