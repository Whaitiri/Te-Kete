@extends('layouts.app')

@section('content')

	<div class="card customCard">
	   <div class="card-content">
			@if(isset($success))
				<div class="notification is-success">
					<button class="delete"></button>
					Thanks for your message! We'll be in touch as soon as possible.
				</div>
			@endif
			<div class="card customCard">
			   <div class="card-content">
					<h1 class="title">How To Reach Us</h1>

					<div class="columns">
						<div class="column is-one-fifth">
							<strong>Email</strong>
						</div>
						<div class="column">
							<p>kaitiaki@tekete.co.nz</p>
						</div>
					</div>

					<div class="columns">
						<div class="column is-one-fifth">
							<strong>Phone</strong>
						</div>
						<div class="column">
							<p>0800 TE KETE</p>
						</div>
					</div>

					<div class="columns">
						<div class="column is-one-fifth">
							<strong>Address</strong>
						</div>
						<div class="column">
							<p>100 The Terrace</p>
							<p>Wellington</p>
							<p>New Zealand</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<form action="{{route('contactStore')}}" method="POST">
		{{csrf_field()}}

				<div class="card customCard m-t-20">
					<div class="card-content">
						<h1 class="title">Contact Us</h1>
						<p>If you appreciate our mahi and want to work with us, get in touch.</p>
					</div>
					<div class="card-content">

						<div class="field">
							<label for="title" class="label">Your Name</label>
							<p class="control">
								<input type="text" class="input" name="name" id="name">
							</p>
						</div>

					<div class="columns">
						<div class="column is-half">
							<div class="field">
								<label for="subtitle" class="label">Your Email</label>
								<p class="control">
									<input type="text" class="input" name="email" id="email">
								</p>
							</div>
						</div>

						<div class="column is-half">
							<div class="field">
								<label for="subtitle" class="label">Your Phone Number</label>
								<p class="control">
									<input type="text" class="input" name="phone" id="phone">
								</p>
							</div>
						</div>
					</div>

						<div class="field">
							<label for="description" class="label">Your Message</label>
							<p class="control">
								<textarea type="textarea" class="textarea" name="message" id="message" rows="5"></textarea>
							</p>
						</div>
						<input type="hidden" name="comment_count" id="comment_count" value="0">
						<button class="button is-success m-t-10">Submit</button>
						<a href="{{ url()->previous() }}" class="button m-t-10">Back</a>

				</div>
			</div>
	</form>
@endsection
