<?php

namespace App\Http\Controllers;
use App\Models\ReservationDetail;


use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = ReservationDetail::all();

        return response()->json(['data' => $reservations], 200);
    }
}
