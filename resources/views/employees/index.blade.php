@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Employees</h2>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Dashboard</a>
            <a href="{{ route('employees.create') }}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> New Employee</a>
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
                    <th>Position</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Hire Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->hire_date }}</td>
                    <td>{{ $employee->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}" class="btn btn-info btn-sm me-1" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning btn-sm me-1" title="Edit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="9" class="text-center py-4 text-muted bg-light rounded-3">No employees found. <br><small>Add your first employee using the green button above!</small></td></tr>
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
