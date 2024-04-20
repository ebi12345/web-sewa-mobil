@extends('layouts.master')
@section('title', 'Data Mobil')
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
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="blog-dashboard.html">Daftar Mobil</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('addMobil') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="brand">Merk Mobil</label>
                    <input type="text" name="brand" id="brand" class="form-control" required
                        placeholder="Input Merk Mobil, contoh: Toyota / Honda">
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model" class="form-control" required
                        placeholder="Input Model, Contoh: Type ABC">
                    @error('model')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="license_plate">Plat Nomer</label>
                    <input type="text" name="license_plate" id="license_plate" class="form-control" required
                        placeholder="Input Plat, Contoh: R 44 BI">
                    @error('license_plate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="rental_rate_per_day">Tarif</label>
                    <input type="number" name="rental_rate_per_day" id="rental_rate_per_day" class="form-control" required
                        placeholder="Input Tarif Per Hari, Contoh: 100000">
                    @error('rental_rate_per_day')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-right">
                    <a href="{{ route('admin.mobil') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>

@endsection
