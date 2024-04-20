<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.dashboard.index');
    }

    public function transaksi()
    {
        $booking = Booking::with('car')->with('user')->get();
        return view('admin.transaksi.index', ['booking' => $booking]);
    }
    public function customer()

    {
        $cust = User::where('is_admin', 0)->get();
        return view('admin.customer.index', ['cust' => $cust]);
    }
}