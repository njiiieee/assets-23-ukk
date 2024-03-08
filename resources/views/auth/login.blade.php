@extends('layouts.app')

@section('content')
    <div class="container paragraph-gap">
        <div class="row" style="margin-top: 10rem; margin-left: 8rem">
            <div class="col-3 p-0" style="width: 200px">
                <div class="card" id="card-logo"
                    style="width: 200px; border-radius: 10px; background-color: white; height: 420px">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('/') }}" class="link-offset-2 link-underline link-underline-opacity-0"
                                style="margin-top: 3rem">
                                <img src="img/logo.png" style="width: 250px">
                                <h5 class="fs-5 text-center" style="color: rgb(255, 188, 107)">
                                    Readify
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 p-0">
                <div class="card" style="border-radius: 10px; width: 40rem">
                    <form method="POST" action="{{ url('proses_login') }}">
                        @csrf
                        <div class="content px-4">
                            <div class="fs-3 d-flex justify-content-center mt-5 " style="color: rgb(255, 188, 107)">
                                <h4 class="fw-medium">
                                    LOG IN
                                </h4>
                            </div>
                            <h6>
                                <div class="mb-4 mt-5 " style="color: rgb(255, 188, 107)">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <h6>
                                <div class="mb-5 mt-3 " style="color: rgb(255, 188, 107)">
                                    <label for="inputPassword5" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </h6>
                            <div class="" style="color: rgb(255, 188, 107)">
                                <p>
                                    Dont have an Account? please
                                    <a href="{{ route('register') }}" style="color: rgb(255, 188, 107)">sign here</a>
                                </p>
                            </div>
                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <a>
                                    <input class="btn px-4 text-light" type="submit" value="{{ __('Login') }}"
                                        style="background-color: rgb(255, 188, 107);">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
