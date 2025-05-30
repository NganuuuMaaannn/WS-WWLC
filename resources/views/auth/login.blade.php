@extends('layouts.master-blank')

@section('content')
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-secondary p-4 text-white text-center position-relative">
                <a href="{{ route('welcome') }}">    
                    <h4 class="font-20 m-b-0 text-white">Wisdom Well Library Center</h4>
                </a>
            </div>
            <div class="account-card-content">
                <form class="form-horizontal m-t-0" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="col-form-label ">{{ __('Email Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label ">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   
                    <div class="form-group row m-t-20">
                        <div class=" col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </div>
@endsection

@section('script')
@endsection


