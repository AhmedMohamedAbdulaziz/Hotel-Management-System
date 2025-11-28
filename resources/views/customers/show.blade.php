@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2>Customer Details</h2>
    <p><strong>ID:</strong> {{ $customer->id }}</p>
    <p><strong>First Name:</strong> {{ $customer->FirstName }}</p>
    <p><strong>Last Name:</strong> {{ $customer->LastName }}</p>
    <p><strong>Email:</strong> {{ $customer->Email }}</p>
    <p><strong>Phone Number:</strong> {{ $customer->PhoneNumber }}</p>
    <p><strong>Address:</strong> {{ $customer->Address }}</p>
    <p><strong>Date of Birth:</strong> {{ $customer->DateOfBirth }}</p>
    <p><strong>Loyalty Points:</strong> {{ $customer->LoyaltyPoints }}</p>
    <p><strong>Registration Date:</strong> {{ $customer->RegistrationDate }}</p>
    <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to list</a>
</div>
@endsection
