@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Create New Post</h1>
			<h4 class="subtitle"></h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
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
									<label for="subtitle" class="label">Post Subtitle</label>
									<p class="control">
										<input type="text" class="input" name="subtitle" id="subtitle">
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
							<label for="title" class="label">Post Slug <small><em>(generated from title)</em></small></label>
							<p class="control">
								<input type="text" :value="compTitleSlug" class="input" name="titleSlug" disabled>
							</p>
						</div>
							</div>

						</div>

						<div class="field">
							<label for="description" class="label">Post Content</label>
							<p class="control">
								<textarea type="textarea" class="textarea" name="content" id="content" rows="12">
								</textarea>
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

					function string_to_slug (str) {
					    str = str.replace(/^\s+|\s+$/g, ''); // trim
					    str = str.toLowerCase();
					  
					    // remove accents, swap ñ for n, etc
					    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
					    var to   = "aaaaeeeeiiiioooouuuunc------";
					    for (var i=0, l=from.length ; i<l ; i++) {
					        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
					    }

					    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
					        .replace(/\s+/g, '-') // collapse whitespace and replace by -
					        .replace(/-+/g, '-'); // collapse dashes

					    return str;
					}
					return string_to_slug(this.title);
				}
			}
	  	});

	</script>
@endsection
