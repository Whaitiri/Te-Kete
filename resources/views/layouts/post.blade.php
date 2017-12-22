@extends('layouts.app')

@section('content')

		<div class="card customCard m-t-20">
			<div class="card-content">
					<div class="column">{!!html_entity_decode($post->content)!!}</div>
			</div>
		</div>

@endsection
