@extends('layouts.app')

@section('content')

   @if (session('status'))
      <div class="notification is-success">
         {{ session('status') }}
      </div>
   @endif

   <div class="columns">
      <div class="column is-one-third is-offset-one-third authContainer">
         <div class="card customCard">
            <div class="card-content">
               <h1 class="title is-heading">Reset Password</h1>
                  <form action="{{route('password.request')}}" method="POST" role="form">
                     {{ csrf_field() }}
                     <input type="hidden" name="token" value="{{ $token }}">
                     <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                           <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}" required>
                        </p>
                        @if ($errors->has('email'))
                           <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                     </div>
                     <div class="columns is-gapless">
                        <div class="column">
                           <div class="field">
                              <label for="password" class="label">Password</label>
                              <p class="control">
                                 <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
                              </p>
                              @if ($errors->has('password'))
                                 <p class="help is-danger">{{$errors->first('password')}}</p>
                              @endif
                           </div>
                        </div>
                        <div class="column">
                           <div class="field">
                              <label for="password_confirmation" class="label">Confirm Password</label>
                              <p class="control">
                                 <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                              </p>
                              @if ($errors->has('password_confirmation'))
                                 <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                              @endif
                           </div>
                        </div>
                     </div>

                     <button class="button is-outlined is-fullwidth is-right m-t-15">Reset Password</button>
                  </form>
                  <h6 class="has-text-centered help"><a href="{{route('login')}}">Already have an account?</a></h6>
            </div>
         </div>
      </div>
   </div>
@endsection
