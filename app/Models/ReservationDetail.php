<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_reg_no',
        'destination',
        'departure_time',
        'arrival_time',
        'status',
    ];
}
