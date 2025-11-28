@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Create Employee</h2>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control rounded-3" name="first_name" id="first_name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control rounded-3" name="last_name" id="last_name" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control rounded-3" name="position" id="position" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-3" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control rounded-3" name="phone" id="phone">
        </div>
        <div class="mb-3">
            <label for="hire_date" class="form-label">Hire Date</label>
            <input type="date" class="form-control rounded-3" name="hire_date" id="hire_date">
        </div>
        <div class="mb-3">
            <label for="is_active" class="form-label">Active</label>
            <select class="form-control rounded-3" name="is_active" id="is_active">
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Create Employee</button>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
