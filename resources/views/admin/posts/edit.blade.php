@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">{{$post->display_name}}</h1>
			<h4 class="subtitle">Edit Posts</h4>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
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
								<textarea type="textarea" class="my-editor textarea" name="content" id="content" rows="12">{{$post->content}}
								</textarea>
							</p>
						</div>
						<button class="button is-success m-t-10">Edit Post</button>
						<a href="{{ url()->previous() }}" class="button m-t-10">Back</a>
						<a class="modalToggle button is-danger is-pulled-right m-t-10">Delete Post</a>

				</div>
				</div>
			</div>
		</div>
	</form>

@endsection

@section('modal')

	<div class="notification">
		<strong>Are you sure you want to delete this? This cannot be undone.</strong>
		<form action="{{route('posts.destroy', $post->id)}}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE" />
			<button type="submit" class="button is-danger m-t-10">Delete Post</button>
			<a class="modalToggle button m-t-10">Go Back</a>
		</form>


	</div>
@endsection

@section('scripts')
	<script src="{{ URL::to('/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
	<script>
		var app = new Vue({
			el:'#app',
		  	data: {

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
