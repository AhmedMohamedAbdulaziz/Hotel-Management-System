@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Reservations</h2>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Dashboard</a>
            <a href="{{ route('reservations.create') }}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> New Reservation</a>
        </div>
    </div>
    <div class="card border-0 shadow-lg rounded-4">
      <div class="card-body p-4">
        <div class="table-responsive">
        <table class="table align-middle mb-0 table-hover">
            <thead style="background:linear-gradient(60deg,#66bb6a,#43a047);color:#fff;">
                <tr>
                    <th>ID</th>
                    <th>Customer ID</th>
                    <th>Reservation Date</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Special Requests</th>
                    <th>Created By (Emp ID)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->customer_id }}</td>
                    <td>{{ $reservation->reservation_date }}</td>
                    <td>{{ $reservation->check_in_date }}</td>
                    <td>{{ $reservation->check_out_date }}</td>
                    <td>{{ $reservation->number_of_adults }}</td>
                    <td>{{ $reservation->number_of_children }}</td>
                    <td>{{ $reservation->total_amount }}</td>
                    <td>{{ $reservation->reservation_status }}</td>
                    <td>{{ $reservation->special_requests }}</td>
                    <td>{{ $reservation->created_by_employee_id }}</td>
                    <td>
                        <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-info btn-sm me-1" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-warning btn-sm me-1" title="Edit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="12" class="text-center py-4 text-muted bg-light rounded-3">No reservations found. <br><small>Add your first reservation using the green button above!</small></td></tr>
            @endforelse
            </tbody>
        </table>
        </div>
      </div>
    </div>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
