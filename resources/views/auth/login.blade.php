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
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group row">



                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row">


                                          
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                         
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>


                                    </form>
                                    <hr class="mt-4">
                                    <div class="text-center small">
                                        Belum punya akun? <a href="{{ route('register') }}">
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
