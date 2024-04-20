@extends('layouts.master')
@section('title', 'Transaksi')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Data Sewa
                    <small>Data Sewa</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Dashboard</a></li> --}}
                    <li class="breadcrumb-item active">Daftar Sewa</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Customer</th>
                            <th>Plat Nomer</th>
                            <th>Deskripsi</th>

                        </tr>

                        @foreach ($booking as $booking)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $booking->user->name }} - No SIM:{{ $booking->user->driving_license_number }}</td>
                                <td>{{ $booking->car->license_plate }}</td>
                                <td>
                                    {!! $booking->end_date > now()
                                        ? '<span class="badge badge-success">Active</span>'
                                        : '<span class="badge badge-danger">Terlambat</span>' !!}
                                </td>


                            </tr>
                        @endforeach
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
