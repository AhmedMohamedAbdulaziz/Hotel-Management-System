@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Customers</h2>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Dashboard</a>
            <a href="{{ route('customers.create') }}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> New Customer</a>
        </div>
    </div>
    <div class="card border-0 shadow-lg rounded-4">
      <div class="card-body p-4">
        <div class="table-responsive">
        <table class="table align-middle mb-0 table-hover">
            <thead style="background:linear-gradient(60deg,#66bb6a,#43a047);color:#fff;">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Loyalty Points</th>
                    <th>Date of Birth</th>
                    <th>Registration Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($customers as $customer)
                <tr style="--tbl-hover-bg: #e8f5e9;">
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->FirstName }}</td>
                    <td>{{ $customer->LastName }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>{{ $customer->PhoneNumber }}</td>
                    <td>{{ $customer->LoyaltyPoints }}</td>
                    <td>{{ $customer->DateOfBirth }}</td>
                    <td>{{ $customer->RegistrationDate }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm me-1" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm me-1" title="Edit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="9" class="text-center py-4 text-muted bg-light rounded-3">No customers found. <br><small>Add your first customer using the green button above!</small></td></tr>
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
