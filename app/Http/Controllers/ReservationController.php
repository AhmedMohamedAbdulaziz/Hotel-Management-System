<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Customer;
use App\Models\Employee;

class ReservationController extends Controller
{
    //
    public function index()
    {
        $reservations = Reservation::with('customer','employee')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create', [
            'customers' => Customer::all(),
            'employees' => Employee::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // Convert empty or invalid dates to null
        foreach ([
            'reservation_date', 'check_in_date', 'check_out_date',
        ] as $field) {
            if (empty($data[$field]) || $data[$field] === '') {
                $data[$field] = null;
            }
        }
        // Fix datetime-local
        if (!empty($data['reservation_date'])) {
            $data['reservation_date'] = str_replace('T', ' ', $data['reservation_date']);
        }
        Reservation::create($data);
        return redirect()->route('reservations.index');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $customers = Customer::all();
        $employees = Employee::all();
        return view('reservations.edit', compact('reservation', 'customers', 'employees'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $data = $request->all();
        foreach ([
            'reservation_date', 'check_in_date', 'check_out_date',
        ] as $field) {
            if (empty($data[$field]) || $data[$field] === '') {
                $data[$field] = null;
            }
        }
        if (!empty($data['reservation_date'])) {
            $data['reservation_date'] = str_replace('T', ' ', $data['reservation_date']);
        }
        $reservation->update($data);
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
