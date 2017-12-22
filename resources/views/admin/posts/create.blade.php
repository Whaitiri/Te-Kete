@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">Create New Post</h1>
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
				<div class="card customCard">
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

							<div class="column is-one-quarter">
								<div class="field">
									<label for="title" class="label">Post Author</label>
									<p class="control">
										<input type="hidden" name="author_id" id="author_id" value="{{Auth::user()->id}}">
										<input type="text" class="input" id="author_id" name="author_id" value="{{Auth::user()->name}}" disabled>

									</p>
								</div>
							</div>

							<div class="column is-one-quarter">
								<div class="field">
									<label for="title" class="label">Post Slug <small><em>(generated from title)</em></small></label>
									<p class="control">
										<input type="text" :value="compTitleSlug" class="input" name="titleSlug" disabled>
									</p>
								</div>
							</div>

							<div class="column is-one-quarter">
								<div class="field">
										<label for="type" class="label">Post Type</label>
										<p class="control">
											<div class="select">
											  <select name="type" id="type" value="1">
												 <option value="0">Community Post</option>
												 <option value="1">Work Post</option>
											  </select>
											</div>
										</p>
									</div>
							</div>

							<div class="column is-one-quarter">
								<div class="field">
										<label for="subtitle" class="label">Post Published?</label>
										<b-switch class="is-inline is-pulled-left" v-model="isSwitchedCustom" name="status" true-value="Yes" false-value="No">

						            </b-switch><p class="is-inline is-pulled-left" v-text="isSwitchedCustom"></p><br>
									</div>

							</div>

						</div>

						<div class="field">
							<label for="description" class="label">Post Content</label>
							<p class="control">
								<textarea type="textarea" class="my-editor textarea" name="content" id="content" rows="12"></textarea>
							</p>
						</div>
						<input type="hidden" name="comment_count" id="comment_count" value="0">
						<button class="button is-success m-t-10">Create Post</button>
						<a href="{{ url()->previous() }}" class="button m-t-10">Back</a>

				</div>
				</div>
			</div>
		</div>
	</form>
@endsection

@section('scripts')
	<script src="{{ URL::to('/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
	<script>
		var app = new Vue({
			el: '#app',
		  	data: function(){
				return {
					title: '',
			     	titleSlug: '',
					isSwitchedCustom: 'No'
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



		var editor_config = {
		 path_absolute : "/",
		 selector: "textarea.my-editor",
		 plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern"
		 ],
		 toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
		 relative_urls: false,
		 file_browser_callback : function(field_name, url, type, win) {
			var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
			var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

			var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
			if (type == 'image') {
			  cmsURL = cmsURL + "&type=Images";
			} else {
			  cmsURL = cmsURL + "&type=Files";
			}

			tinyMCE.activeEditor.windowManager.open({
			  file : cmsURL,
			  title : 'Upload...',
			  width : x * 0.8,
			  height : y * 0.8,
			  resizable : "yes",
			  close_previous : "no"
			});
		 }
		};

		tinymce.init(editor_config);

	</script>
@endsection
