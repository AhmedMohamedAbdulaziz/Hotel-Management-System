@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Edit Reservation</h2>
    <form action="{{ route('reservations.update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="number" class="form-control rounded-3" name="customer_id" id="customer_id" value="{{ $reservation->customer_id }}" required>
        </div>
        <div class="mb-3">
            <label for="reservation_date" class="form-label">Reservation Date</label>
            <input type="datetime-local" class="form-control rounded-3" name="reservation_date" id="reservation_date" value="{{ isset($reservation->reservation_date) ? date('Y-m-d\TH:i', strtotime($reservation->reservation_date)) : '' }}">
        </div>
        <div class="mb-3">
            <label for="check_in_date" class="form-label">Check In Date</label>
            <input type="date" class="form-control rounded-3" name="check_in_date" id="check_in_date" value="{{ $reservation->check_in_date }}" required>
        </div>
        <div class="mb-3">
            <label for="check_out_date" class="form-label">Check Out Date</label>
            <input type="date" class="form-control rounded-3" name="check_out_date" id="check_out_date" value="{{ $reservation->check_out_date }}" required>
        </div>
        <div class="mb-3">
            <label for="number_of_adults" class="form-label">Number Of Adults</label>
            <input type="number" class="form-control rounded-3" name="number_of_adults" id="number_of_adults" value="{{ $reservation->number_of_adults }}" min="0" required>
        </div>
        <div class="mb-3">
            <label for="number_of_children" class="form-label">Number Of Children</label>
            <input type="number" class="form-control rounded-3" name="number_of_children" id="number_of_children" value="{{ $reservation->number_of_children }}" min="0">
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" step="0.01" class="form-control rounded-3" name="total_amount" id="total_amount" value="{{ $reservation->total_amount }}">
        </div>
        <div class="mb-3">
            <label for="reservation_status" class="form-label">Reservation Status</label>
            <select class="form-control rounded-3" name="reservation_status" id="reservation_status">
                <option value="Confirmed" @if($reservation->reservation_status=='Confirmed') selected @endif>Confirmed</option>
                <option value="CheckedIn" @if($reservation->reservation_status=='CheckedIn') selected @endif>Checked In</option>
                <option value="CheckedOut" @if($reservation->reservation_status=='CheckedOut') selected @endif>Checked Out</option>
                <option value="Cancelled" @if($reservation->reservation_status=='Cancelled') selected @endif>Cancelled</option>
                <option value="NoShow" @if($reservation->reservation_status=='NoShow') selected @endif>No Show</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="special_requests" class="form-label">Special Requests</label>
            <textarea class="form-control rounded-3" name="special_requests" id="special_requests">{{ $reservation->special_requests }}</textarea>
        </div>
        <div class="mb-3">
            <label for="created_by_employee_id" class="form-label">Created By (Employee ID)</label>
            <input type="number" class="form-control rounded-3" name="created_by_employee_id" id="created_by_employee_id" value="{{ $reservation->created_by_employee_id }}">
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Update Reservation</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
