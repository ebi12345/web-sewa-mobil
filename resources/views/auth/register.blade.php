
@extends('layouts.app')

@section('content')

    <body class="body">
        <div class="container">

            <div class="row justify-content-center align-items-center " style="height: 100vh;">

                <div class="col-lg-6">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-body p-0">

                            <!-- Nested Row within Card Body -->
                            <div class="col-lg">

                                <div class="row p-3 align-items-end justify-content-end">
                                </div>

                                <div class="pb-1 pr-5 pl-5" style="transform: translateY(-10%)">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">LOGIN</h1>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
            
                                        <div class="form-group row">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" required autocomplete="address">
            
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="phone_number"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="phone_number" type="text"
                                                    class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                                    value="{{ old('phone_number') }}" required autocomplete="phone_number">
            
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="driving_license_number"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Driving License Number') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="driving_license_number" type="text"
                                                    class="form-control @error('driving_license_number') is-invalid @enderror"
                                                    name="driving_license_number" value="{{ old('driving_license_number') }}" required
                                                    autocomplete="driving_license_number">
            
                                                @error('driving_license_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email">
            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                                    required autocomplete="new-password">
            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
            
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr class="mt-4">
                                    <div class="text-center small">
                                        Sudah punya akun? <a href="{{ route('login') }}">
                                            Daftar disini</a>
                                    </div>
                                    {{-- <div class="text-center ">
                                    <a class="small" href="/forgot-password">Lupa
                                        Password?</a>
                                </div> --}}

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endsection

