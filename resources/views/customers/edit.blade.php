@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2>Edit Customer</h2>
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="FirstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="FirstName" id="FirstName" value="{{ $customer->FirstName }}" required>
        </div>
        <div class="mb-3">
            <label for="LastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="LastName" id="LastName" value="{{ $customer->LastName }}" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" value="{{ $customer->Email }}" required>
        </div>
        <div class="mb-3">
            <label for="PhoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" value="{{ $customer->PhoneNumber }}">
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label>
            <textarea class="form-control" name="Address" id="Address">{{ $customer->Address }}</textarea>
        </div>
        <div class="mb-3">
            <label for="DateOfBirth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="DateOfBirth" id="DateOfBirth" value="{{ $customer->DateOfBirth }}">
        </div>
        <div class="mb-3">
            <label for="LoyaltyPoints" class="form-label">Loyalty Points</label>
            <input type="number" class="form-control" name="LoyaltyPoints" id="LoyaltyPoints" value="{{ $customer->LoyaltyPoints }}">
        </div>
        <div class="mb-3">
            <label for="RegistrationDate" class="form-label">Registration Date</label>
            <input type="datetime-local" class="form-control" name="RegistrationDate" id="RegistrationDate" value="{{ isset($customer->RegistrationDate) ? date('Y-m-d\TH:i', strtotime($customer->RegistrationDate)) : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
