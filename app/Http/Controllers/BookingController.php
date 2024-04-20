<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function vSewaMobil()
    {
        $car = Car::all()->where('availability', 1);
        return view('user.sewa.index', ['daftarMobil' => $car]);
    }
    public function sewaMobil(Request $request)
    {
        // dd($request->all());




        $booking = new Booking([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $request->total_cost
        ]);

        $booking->save();
        $car = Car::findOrFail($request->car_id);
        $car->availability = 0;
        $car->save();
        return back()->with('sewasukses', 'Berhasil Sewa');
    }
    public function kembaliMobil()
    {
        return view('user.kembali.index');
    }
    public function kembalikanMobil(Request $request)
    {
        $sewa = Booking::with('car')->whereHas('car', function ($query) use ($request) {
            $query->where('license_plate', $request->plat);
        })->get();

        if ($sewa->isEmpty()) {
            return back()->with('alert', 'data tidak ditemukan');
        } else {

            return response()->json($sewa);
        }
    }
}