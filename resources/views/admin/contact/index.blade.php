@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title customTitle">View Contact Messages</h1>
		</div>
		<div class="buttons is-pulled-right m-r-20">
			<a href="{{route('admin.dashboard')}}" class="button">Back</a>
		</div>
	</div>
	<hr class="m-t-0">
	{{$contacts->links()}}
		@forelse ($contacts as $contact)
				<div class="card customCard m-t-10 m-b-10">
					<div class="card-content">
						<div class="columns">
							<div class="column">
								<p class="subtitle">Name</p>
								{{$contact->name}}
							</div>
							<div class="column">
								<p class="subtitle">Phone</p>
								{{$contact->phone}}
							</div>
							<div class="column is-one-quarter is-pulled-right">
									<p class="subtitle">Sent at</p>
									{{$contact->created_at}}
							</div>

						</div>
						<div class="columns">
							<div class="column contentCell">
								<p class="subtitle">Email</p>
								{{$contact->email}}
							</div>
						</div>
						<div class="columns">
								<div class="column">
									<p class="subtitle">Message</p>
									{{$contact->message}}
								</div>
						</div>
						<form action="{{route('contact.destroy', $contact->id)}}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE" />
							<button type="submit" class="button is-danger m-t-10">Delete Post</button>
						</form>
					</div>

				</div>
		@empty
			<div class="card customCard">
				<div class="card-content">
					<p>Inbox is empty.</p>
				</div>
			</div>
		@endforelse
	{{$contacts->links()}}

@endsection
