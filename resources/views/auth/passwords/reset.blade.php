@extends('layouts.app')

@section('content')
     <!-- Nested Row within Card Body -->
    <div class="row">
         <div class="col-lg-5 d-none d-lg-block bg-register-image">
         <img src="{{ asset('dog-prive/assets/img/hero.jpeg')}}" alt="" class="img-fluid" style="border-radius: 1rem 0 0 1rem;">

         </div> 
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{ __('Reset Password') }}</h1>
                </div>                
                <form class="user" method="POST" action="{{ route('password.update') }}">
                 
                @csrf
                        
                        <input type="hidden" name="token" value="{{ $token }}">
                    <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-sm-0">
                            <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control"  placeholder="Repeat Password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                        {{ __('Reset Password') }}
                    </button>
                    <!-- <hr> -->
                    
                </form>
                <hr>
            </div>
        </div>
    </div>
@endsection
