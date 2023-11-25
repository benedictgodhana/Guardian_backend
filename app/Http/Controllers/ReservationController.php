<?php

namespace App\Http\Controllers;
use App\Models\ReservationDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        // Get today's date
        $today = Carbon::today();

        // Filter reservations for today
        $reservations = ReservationDetail::all();

        // Format departure_time to AM/PM
        foreach ($reservations as $reservation) {
            $reservation->departure_time = Carbon::parse($reservation->departure_time)->format('h:i A');
        }

        return response()->json(['data' => $reservations], 200);
    }

}
