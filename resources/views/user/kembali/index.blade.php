@extends('layouts.master')
@section('title', 'Sewa Mobil')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Kembalikan Mobil
                    <small>Kembalikan Mobil</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Dashboard</a></li> --}}
                    <li class="breadcrumb-item active">Kembalikan Mobil</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">


            <form action="{{ route('kembalikanSewa') }}" method="post">
                @csrf



                <div class="form-group">
                    <label for="plat">Input Plat Nomer</label>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <input type="text" name="plat" id="plat" class="form-control" required>
                </div>


                <button type="submit" class="btn btn-primary">Sewa</button>
            </form>
        </div>
    </div>

@endsection
@if (session('alert'))
    <script>
        alert('{{ session('alert') }}');
    </script>
@endif
