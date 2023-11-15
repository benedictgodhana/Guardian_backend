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
            'bus_no' => 'Bus001', // Add the 'bus_no' field
            'destination' => 'Nairobi',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(2),
            'status' => 'confirmed',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus002', // Add the 'bus_no' field
            'destination' => 'Mombasa',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'pending',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus003', // Add the 'bus_no' field
            'destination' => 'Busia',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Arrived',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus004', // Add the 'bus_no' field
            'destination' => 'Kwale',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Cancelled',
        ]);

        ReservationDetail::create([
            'bus_reg_no' => 'XYZ789',
            'bus_no' => 'Bus005', // Add the 'bus_no' field
            'destination' => 'Witu',
            'departure_time' => Carbon::now(),
            'arrival_time' => Carbon::now()->addHours(3),
            'status' => 'Late',
        ]);
    }
}
