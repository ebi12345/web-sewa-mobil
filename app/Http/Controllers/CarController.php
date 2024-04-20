<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function adminMobil()
    {
        $car = Car::all();
        return view('admin.car.index', ['car' => $car]);
    }
    public function vAddMobil()
    {
        return view('admin.car.add');
    }

    public function addMobil(Request $request)
    {

        $validatedData = $request->validate([
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'license_plate' => ['required', 'string', 'max:20'],
            'rental_rate_per_day' => ['required', 'numeric', 'min:0'],
        ]);

        Car::create($validatedData);

        return redirect(route('admin.mobil'))->with('alert', 'Data Berhasil Ditambah');
    }

    public function vEditMobil(Car $car)
    {
        // dd($car);

        return view('admin.car.edit', ['cars' => $car]);
    }
    public function editMobil(Request $request, Car $car)
    {
        // dd($car);

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->license_plate = $request->license_plate;
        $car->rental_rate_per_day = $request->rental_rate_per_day;
        $car->availability = $request->availability;
        $car->save();
        return redirect(route('admin.mobil'))->with('alert', 'Data Berhasil Diupdate');
    }
}