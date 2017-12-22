@extends('layouts.app')

@section('content')

<div class="card customCard">

   <div class="card-content">

      <div class="homeHeroText">

         <div class="content">
            <img src="{{asset('img/logo.png')}}" alt="">
            <h1 class="title is-1 is-logo-font m-t-0">TeKete</h1>
            <p class="is-centered">Indigenous Web Development
            <br>for
            <br>Small Business & Iwi Groups</p>
         </div>
      </div>
      <div class="homeHeroContainer">
         <img class="homeHero is-centered" src="{{asset('img/home-hero.jpg')}}" alt="">
      </div>

   </div>
</div>



@endsection
