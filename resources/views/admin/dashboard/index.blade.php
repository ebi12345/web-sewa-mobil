@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                    <small>Dashboard</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Dashboard</a></li> --}}
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            @if (Auth::user()->is_admin === 1)
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card overflowhidden l-blue">
                        <div class="body">
                            <h3 class="m-t-0">{{ DB::table('Cars')->count() }}</h3>
                            <p class="m-b-0">Total Mobil</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0"
                            data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                            data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="60px"
                            data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card overflowhidden l-parpl">
                        <div class="body">
                            <h3 class="m-t-0">{{ DB::table('Cars')->where('availability', 0)->count() }}</h3>
                            <p class="m-b-0">Sedang Disewa</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0"
                            data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                            data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="60px"
                            data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> 6,5,7,4,5,3,8,6,5 </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card overflowhidden l-seagreen">
                        <div class="body">
                            <h3 class="m-t-0">{{ DB::table('Users')->where('is_admin', 0)->count() }}</h3>
                            <p class="m-b-0">Total Customer</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0"
                            data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                            data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="60px"
                            data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5 </div>
                    </div>
                </div>
            @else
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="card overflowhidden l-seagreen">
                        <div class="body">
                            <h3 class="m-t-0">{{ DB::table('bookings')->where('user_id', Auth::user()->id)->count() }}</h3>
                            <p class="m-b-0">Sewa Aktif</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0"
                            data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)"
                            data-spot-Color="rgb(0, 188, 212)" data-offset="90" data-width="100%" data-height="60px"
                            data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5 </div>
                    </div>
                </div>
            @endif

        </div>


    </div>

@endsection
