<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReservationDetail;
use Carbon\Carbon;


class ReservationDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReservationDetail::create([
            'bus_reg_no' => 'ABC123',
            'destination' => 'Nairobi',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(2),
            'status' => 'confirmed',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'destination' => 'Mombasa',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'pending',
        ]);
        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arriving in 10 minutes time',
        ]); ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]); ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);
    }
}
