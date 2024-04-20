@extends('layouts.master')
@section('title', 'Sewa Mobil')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Sewa Mobil
                    <small>Sewa Mobil</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Daftar Mobil</a></li> --}}
                    <li class="breadcrumb-item active">Sewa</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tambahSewa') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="car_id">Pilih Mobil</label>
                    <select name="car_id" id="car_id" class="form-control" required>
                        @foreach ($daftarMobil as $car)
                            <option value="{{ $car->id }}" data-rental-rate="{{ $car->rental_rate_per_day }}">
                                {{ $car->brand }} - {{ $car->model }} - Plat
                                {{ $car->license_plate }} - {{ $car->rental_rate_per_day }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_date">Tanggal Mulai</label>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <input type="datetime-local" name="start_date" id="start_date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="end_date">Tanggal Selesai</label>
                    <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="total_cost">Total Biaya</label>
                    <input type="text" name="total_cost" id="total_cost" class="form-control" readonly>
                </div>

                <button type="submit" class="btn btn-primary">Sewa</button>
            </form>

        </div>
    </div>


@endsection

@section('addJs')
    <script>
        document.getElementById('car_id').addEventListener('change', function() {
            calculateTotalCost();
        });

        document.getElementById('start_date').addEventListener('change', function() {
            calculateTotalCost();
        });

        document.getElementById('end_date').addEventListener('change', function() {
            calculateTotalCost();
        });

        function calculateTotalCost() {
            const carId = document.getElementById('car_id').value;
            const rentalRate = parseFloat(document.querySelector(`#car_id option[value="${carId}"]`).getAttribute(
                'data-rental-rate'));
            const startDate = new Date(document.getElementById('start_date').value);
            const endDate = new Date(document.getElementById('end_date').value);

            // Calculate rental days accurately
            const oneDay = 24 * 60 * 60 * 1000; // hours * minutes * seconds * milliseconds
            const rentalDays = Math.round(Math.abs((startDate - endDate) / oneDay)) + 1;

            const totalCost = rentalRate * rentalDays;

            document.getElementById('total_cost').value = totalCost;
        }
    </script>

@endsection
