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
        $reservations = ReservationDetail::whereDate('departure_time', $today)->get();

        return response()->json(['data' => $reservations], 200);
    }
}
