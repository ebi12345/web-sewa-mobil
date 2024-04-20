@extends('layouts.master')
@section('title', 'Edit Data Mobil')
@section('addCss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Data Mobil
                    <small>Daftar Mobil</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-home"></i>
                            Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.mobil') }}">Daftar Mobil</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('editMobil', $cars->id ) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="brand">Merk Mobil</label>
                    <input type="text" value="{{ $cars->brand }}" name="brand" id="brand" class="form-control"
                        required placeholder="Input Merk Mobil, contoh: Toyota / Honda">
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" value="{{ $cars->model }}" name="model" id="model" class="form-control"
                        required placeholder="Input Model, Contoh: Type ABC">
                    @error('model')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="license_plate">Plat Nomer</label>
                    <input type="text" value="{{ $cars->license_plate }}" name="license_plate" id="license_plate"
                        class="form-control" required placeholder="Input Plat, Contoh: R 44 BI">
                    @error('license_plate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="rental_rate_per_day">Tarif</label>
                    <input type="number" value="{{ $cars->rental_rate_per_day }}" name="rental_rate_per_day"
                        id="rental_rate_per_day" class="form-control" required
                        placeholder="Input Tarif Per Hari, Contoh: 100000">
                    @error('rental_rate_per_day')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="hidden" name="availability" value="0">
                    <input {{ $cars->availability === 1 ? 'checked' : '' }} type="checkbox" name='availability'
                        id='availability' data-on="Tersedia" data-off="Tidak Tersedia" data-toggle="toggle"
                        data-onstyle="success" data-offstyle="danger" data-size="xs" value='1'>


                </div>
                <div class="text-right">
                    <a href="{{ route('admin.mobil') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>

@endsection
@section('addJs')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection
