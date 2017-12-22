@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Edit Site Styling</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{ url()->previous() }}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	<form action="{{route('styles.store')}}" method="POST">
		{{csrf_field()}}
		{{-- {{method_field('PUT')}} --}}

		<div class="columns">
			<div class="column">
				<div class="card customCard">
					<div class="card-content">

						{{--  section start --}}
								<div class="columns is-multiline">
									@foreach ($styles as $style)
										<div class="column is-one-third-tablet is-one-quarter-desktop">
											<div class="field">
												<label for="name" class="label">{{ $style->title }}</label>
												<p class="control">
													<input class="input jscolor" name="{{ $style->slug }}" id="{{ $style->slug }}" value="{{ $style->value }}">
												</p>
											</div>
										</div>
									@endforeach

								</div>
						{{--  section end --}}

						{{--  section start --}}
						{{-- <div class="columns">
							<div class="column is-2">
								<p class="subtitle">Body</p>
							</div>
							<div class="column is-10">
								<div class="columns is-multiline">

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Background</label>
											<p class="control">
												<input class="input jscolor" name="bodyBGColor" id="bodyBGColor" value="{{ $styles[4]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Card Background</label>
											<p class="control">
												<input class="input jscolor" name="cardBGColor" id="cardBGColor" value="{{ $styles[5]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Title</label>
											<p class="control">
												<input class="input jscolor" name="bodyTitleColor" id="bodyTitleColor" value="{{ $styles[5]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Subtitle</label>
											<p class="control">
												<input class="input jscolor" name="bodySubtitleColor" id="bodySubtitleColor" value="{{ $styles[5]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Font</label>
											<p class="control">
												<input class="input jscolor" name="bodyFontColor" id="bodyFontColor" value="{{ $styles[5]->value }}">
											</p>
											</div>
									</div>

								</div>
							</div>
						</div> --}}
						{{--  section end --}}

						{{--  section start --}}
						{{-- <div class="columns">
							<div class="column is-2">
								<p class="subtitle">Footer</p>
							</div>
							<div class="column is-10">
								<div class="columns is-multiline">

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Background</label>
											<p class="control">
												<input class="input jscolor" name="footerBGColor" id="footerBGColor" value="{{ $styles[6]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Font</label>
											<p class="control">
												<input class="input jscolor" name="footerFontColor" id="footerFontColor" value="{{ $styles[7]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Hover</label>
											<p class="control">
												<input class="input jscolor" name="footerHoverColor" id="footerHoverColor" value="{{ $styles[8]->value }}">
											</p>
										</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Hover Font</label>
											<p class="control">
												<input class="input jscolor" name="footerHoverFontColor" id="footerHoverFontColor" value="{{ $styles[9]->value }}">
											</p>
										</div>
									</div>

								</div>
							</div>
						</div> --}}
						{{--  section end --}}

						{{--  section start --}}
						{{-- <div class="columns">
							<div class="column is-2">
								<p class="subtitle">Admin Panel</p>
							</div>
							<div class="column is-10">
								<div class="columns is-multiline">

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Background</label>
											<p class="control">
												<input class="input jscolor" name="adminBGColor" id="adminBGColor" value="{{ $styles[10]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Font</label>
											<p class="control">
												<input class="input jscolor" name="adminFontColor" id="adminFontColor" value="{{ $styles[11]->value }}">
											</p>
											</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Hover</label>
											<p class="control">
												<input class="input jscolor" name="adminHoverColor" id="adminHoverColor" value="{{ $styles[12]->value }}">
											</p>
										</div>
									</div>

									<div class="column is-one-third-tablet is-one-quarter-desktop">
										<div class="field">
											<label for="name" class="label">Hover Font</label>
											<p class="control">
												<input class="input jscolor" name="adminHoverFontColor" id="adminHoverFontColor" value="{{ $styles[13]->value }}">
											</p>
										</div>
									</div>

								</div>
							</div>
						</div> --}}
						{{--  section end --}}
						<button class="button is-success m-t-10">Edit Role</button>
						<hr class="m-t-0">
					</div>
				</div>
			</div>
		</div>
	</form>



@endsection
