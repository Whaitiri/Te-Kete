@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$post->display_name}}</h1>
			<h4 class="subtitle">Edit Posts</h4>
		</div>
		<div class="column is-one-fifth">
			<a href="{{ URL::previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('posts.update', $post->id)}}" method="POST">

		{{csrf_field()}}
		{{method_field('PUT')}}

		<div class="columns">
			<div class="column">
				<div class="card">
					<div class="card-content">

						<div class="columns">

							<div class="column is-one-half">
								<div class="field">
									<label for="title" class="label">Title</label>
									<p class="control">
										<input type="text" class="input" name="title" id="title" value="{{$post->title}}">
									</p>
								</div>
							</div>

							<div class="column is-one-half">
								<div class="field">
						        	<label for="subtitle" class="label">Subtitle</label>
						        	<p class="control">
						         	<input type="text" class="input" name="subtitle" id="subtitle" value="{{$post->subtitle}}">
						        	</p>
						      </div>
							</div>

						</div>

						<div class="field">
							<label for="content" class="label">Content</label>
							<p class="control">
								<input type="text" class="input" name="content" id="content" value="{{$post->content}}">
							</p>
						</div>
						<button class="button is-success m-t-10">Edit Post</button>

				</div>
				</div>
			</div>
		</div>
	</form>

@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el:'#app',
		  	data: {

			}
	  	});

	</script>
@endsection
