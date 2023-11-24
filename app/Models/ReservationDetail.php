<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    use HasFactory;

    protected $table = 'app_open_bookings';
    protected $fillable = [
        'reg_number',
        'route_name',
        'bus_name',
        'departure_name',
        'arrival_time',
        'status_name'
    ];
}
