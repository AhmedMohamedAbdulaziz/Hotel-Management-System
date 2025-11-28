@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="card border-0 shadow-lg rounded-4 mx-auto" style="max-width: 760px;">
      <div class="card-body p-4">
        <h2 class="fw-bold mb-4">Reservation Details</h2>
        <dl class="row mb-0">
          <dt class="col-4 text-muted">Reservation ID</dt><dd class="col-8">{{ $reservation->id }}</dd>
          <dt class="col-4 text-muted">Customer ID</dt><dd class="col-8">{{ $reservation->customer_id }}</dd>
          <dt class="col-4 text-muted">Reservation Date</dt><dd class="col-8">{{ $reservation->reservation_date }}</dd>
          <dt class="col-4 text-muted">Check In</dt><dd class="col-8">{{ $reservation->check_in_date }}</dd>
          <dt class="col-4 text-muted">Check Out</dt><dd class="col-8">{{ $reservation->check_out_date }}</dd>
          <dt class="col-4 text-muted">Adults</dt><dd class="col-8">{{ $reservation->number_of_adults }}</dd>
          <dt class="col-4 text-muted">Children</dt><dd class="col-8">{{ $reservation->number_of_children }}</dd>
          <dt class="col-4 text-muted">Total Amount</dt><dd class="col-8">{{ $reservation->total_amount }}</dd>
          <dt class="col-4 text-muted">Status</dt><dd class="col-8">{{ $reservation->reservation_status }}</dd>
          <dt class="col-4 text-muted">Special Requests</dt><dd class="col-8">{{ $reservation->special_requests }}</dd>
          <dt class="col-4 text-muted">Created By (Employee ID)</dt><dd class="col-8">{{ $reservation->created_by_employee_id }}</dd>
        </dl>
        <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-gradient-primary mt-4 px-4">Edit</a>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary mt-4 ms-2">Back</a>
      </div>
    </div>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
dl dt { font-weight: 500; }
dl dd { margin-bottom: 1rem; }
</style>
@endsection
