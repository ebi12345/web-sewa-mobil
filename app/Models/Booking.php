<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';




    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'total_cost',
    ];
    //

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function car()
    {
        return $this->belongsTo('App\Models\car', 'car_id');
    }
}