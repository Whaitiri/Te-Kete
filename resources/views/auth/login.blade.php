@extends('layouts.app')

@section('content')
   <div class="columns">
      <div class="column is-one-third is-offset-one-third authContainer">
         <div class="card">
            <div class="card-content">
               <h1 class="title is-heading">Log In</h1>
                  <form action="{{route('login')}}" method="POST" role="form">
                     {{ csrf_field() }}
                     <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                           <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                        </p>
                        @if ($errors->has('email'))
                           <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                     </div>
                     <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                           <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                        </p>
                        @if ($errors->has('password'))
                           <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif

                     </div>
                     <b-checkbox class="m-t-10" name="remember">Remember Me</b-checkbox>

                     <button class="button is-outlined is-fullwidth is-right m-t-15">Log in</button>
                  </form>
                  <h6 class="has-text-centered help"><a href="{{route('password.request')}}">Forgot my password</a></h6>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app'
    });
  </script>
@endsection
