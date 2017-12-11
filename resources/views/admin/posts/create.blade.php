@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create New Post</h1>
			<h4 class="subtitle"></h4>
		</div>
		<div class="column is-one-fifth">
			<a href="{{ URL::previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('posts.store')}}" method="POST">
		{{csrf_field()}}

		<div class="columns">
			<div class="column">
				<div class="card">
					<div class="card-content">

						<div class="field">
							<label for="title" class="label">Post Title</label>
							<p class="control">
								<input type="text" v-model="title" class="input" name="title" id="title">
							</p>
						</div>

						<div class="field">
							<label for="title" class="label">Post Slug</label>
							<p class="control">
								<input type="text" :value="compTitleSlug" class="input" name="titleSlug" readonly>
							</p>
						</div>

						<div class="columns">

							<div class="column is-one-half">
								<div class="field">
									<label for="title" class="label">Post Author</label>
									<p class="control">
										<input type="hidden" name="author_id" id="author_id" value="{{Auth::user()->id}}">
										<input type="text" class="input" id="author_id" name="author_id" value="{{Auth::user()->name}}" disabled>

									</p>
								</div>
							</div>

							<div class="column is-one-half">
								<div class="field">
									<label for="subtitle" class="label">Post Subtitle</label>
									<p class="control">
										<input type="text" class="input" name="subtitle" id="subtitle">
									</p>
								</div>
							</div>

						</div>

						<div class="field">
							<label for="description" class="label">Post Content</label>
							<p class="control">
								<input type="text" class="input" name="content" id="content">
							</p>
						</div>
						<input type="hidden" name="status" id="status" value="1">
						<input type="hidden" name="type" id="type" value="1">
						<input type="hidden" name="comment_count" id="comment_count" value="0">
						<button class="button is-success m-t-10">Create Post</button>

				</div>
				</div>
			</div>
		</div>
	</form>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
		  	data: function(){
				return {
					title: '',
			     	titleSlug: ''
				};
			},
			computed: {
				compTitleSlug: function() {
					return this.title
				}
			}
	  	});

	</script>
@endsection
