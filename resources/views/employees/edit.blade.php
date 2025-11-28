@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Edit Employee</h2>
    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-3" name="first_name" id="first_name" value="{{ $employee->first_name }}" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-3" name="last_name" id="last_name" value="{{ $employee->last_name }}" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control rounded-3" name="position" id="position" value="{{ $employee->position }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-3" name="email" id="email" value="{{ $employee->email }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control rounded-3" name="phone" id="phone" value="{{ $employee->phone }}">
        </div>
        <div class="mb-3">
            <label for="hire_date" class="form-label">Hire Date</label>
            <input type="date" class="form-control rounded-3" name="hire_date" id="hire_date" value="{{ $employee->hire_date }}">
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Active</label>
            <select class="form-control rounded-3" name="is_active" id="is_active">
                <option value="1" @if($employee->is_active) selected @endif>Yes</option>
                <option value="0" @if(!$employee->is_active) selected @endif>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
