@extends('layouts.app')

@section('content')
    <div class="container paragraph-gap" id="regist">
        <div class="row">
            <div class="col p-0">
                <div class="card" style="border-radius: 10px; width: 540px; margin-left: 300px; margin-top: 70px;  ">
                    <div class="content px-4">
                        <div class="fs-3 d-flex justify-content-center mt-5 " style="color: rgb(255, 188, 107)">
                            <h4 class="fw-medium">
                                {{ __('Create Your Account') }}
                            </h4>
                        </div>
                        <form method="POST" action="{{ route('proses_register') }}">
                            {{ csrf_field() }}
                            <h6>
                                <div class="mb-4 mt-5 " style="color: rgb(255, 188, 107)">
                                    <label for="exampleFormControlInput1" class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <h6>
                                <div class="mb-4 mt-5 " style="color: rgb(255, 188, 107)">
                                    <label for="exampleFormControlInput1" class="form-label">{{ __('Username') }}</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <h6>
                                <div class="mb-4 mt-3 " style="color: rgb(255, 188, 107)">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <h6>
                                <div class="mb-4 mt-3 " style="color: rgb(255, 188, 107)">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <h6>
                                <div class="mb-4 mt-3 " style="color: rgb(255, 188, 107)">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}
                                    </label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </h6>
                            <div class="mb-4 mt-4 d-flex justify-content-center">
                                <a href="">
                                    <input class="btn px-4 text-light" type="submit" value="{{ __('Sign In') }}"
                                        style="background-color: rgb(255, 188, 107);">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
