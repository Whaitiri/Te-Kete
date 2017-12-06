@extends('admin.layouts.app')

@section('content')
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Admin Dashboard</h1>
		</div>
	</div>
	<hr class="m-t-0">
	<section class="section">
		<div class="is-pulled-left">
  			 This will allow you to create and edit users.
  		</div>
		<div class="is-pulled-right">
		 	<a href="{{route('users.index')}}" class="button"> <i class="fa fa-user-add"></i>Manage Users</a>
		</div>
	</section>

@endsection
