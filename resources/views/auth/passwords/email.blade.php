@extends('layouts.app')

@section('content')

   @if (session('status'))
      <div class="notification is-success">
         {{session('status')}}
      </div>
   @endif

   
   <div class="columns">
      <div class="column is-one-third is-offset-one-third authContainer">
         <div class="card customCard">
            <div class="card-content">
               <h1 class="title customTitle is-heading">Forgot Password</h1>

                  <form action="{{route('password.email')}}" method="POST" role="form">
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

                     <button class="button is-outlined is-fullwidth is-right m-t-15">Reset Password</button>
                  </form>
                  <h6 class="has-text-centered help"><a href="{{route('login')}}">Back to Login</a></h6>
            </div>
         </div>
      </div>
   </div>
@endsection
