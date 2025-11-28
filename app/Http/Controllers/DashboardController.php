<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
     public function index()
    {
        return view('dashboard', [
            'rooms' => Room::count(),
            'customers' => Customer::count(),
            'reservations' => Reservation::count(),
            'revenue' => Reservation::sum('total_amount'),
        ]);
    }
}
