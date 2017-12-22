@extends('layouts.app')

@section('content')
<section class="hero is-dark is-bold">
   <div class="hero-body">
      <div class="container">
         <h1 class="title is-logo-font is-size-2">TeKete</h1>
      </div>
   </div>
</section>

<div class="card customCard">
   <div class="card-image">
      <img src="{{asset('img/logo_full.png')}}" alt="">

   </div>
   <div class="card-content">
      <div class="media">
         <div class="media-left">
            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">

         </div>

      </div>

   </div>

</div>



@endsection
