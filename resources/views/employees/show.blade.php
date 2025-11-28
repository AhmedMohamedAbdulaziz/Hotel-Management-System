@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="card border-0 shadow-lg rounded-4 mx-auto" style="max-width: 640px;">
      <div class="card-body p-4">
        <h2 class="fw-bold mb-4">Employee Details</h2>
        <dl class="row mb-0">
          <dt class="col-4 text-muted">First Name</dt><dd class="col-8">{{ $employee->first_name }}</dd>
          <dt class="col-4 text-muted">Last Name</dt><dd class="col-8">{{ $employee->last_name }}</dd>
          <dt class="col-4 text-muted">Position</dt><dd class="col-8">{{ $employee->position }}</dd>
          <dt class="col-4 text-muted">Email</dt><dd class="col-8">{{ $employee->email }}</dd>
          <dt class="col-4 text-muted">Phone</dt><dd class="col-8">{{ $employee->phone }}</dd>
          <dt class="col-4 text-muted">Hire Date</dt><dd class="col-8">{{ $employee->hire_date }}</dd>
          <dt class="col-4 text-muted">Active</dt><dd class="col-8">{{ $employee->is_active ? 'Yes' : 'No' }}</dd>
        </dl>
        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-gradient-primary mt-4 px-4">Edit</a>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-4 ms-2">Back</a>
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
