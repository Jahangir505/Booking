
@extends('layouts.app')

@section('content')
    <div class="contentWrap">
        <div class="container">
            <section class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            Recover Password
                        </div>
                        <h1 class="subTitle mt-4 mb-0 text-center">Forgot your Password ? </h1>
                        <p class="text-center">We will send a verification code in your email.</p>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Type Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-lg btn-orange btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- End Card  -->
                </div>
            </section>
            <!-- End welcome section  -->

        </div>
    </div>
@endsection