@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Services</h2>
        <div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary me-2"><i class="fa fa-arrow-left"></i> Dashboard</a>
            <a href="{{ route('services.create') }}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> New Service</a>
        </div>
    </div>
    <div class="card border-0 shadow-lg rounded-4">
      <div class="card-body p-4">
        <div class="table-responsive">
        <table class="table align-middle mb-0 table-hover">
            <thead style="background:linear-gradient(60deg,#66bb6a,#43a047);color:#fff;">
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->service_name }}</td>
                    <td>{{ $service->price }}</td>
                    <td>{{ $service->category }}</td>
                    <td>
                        <a href="{{ route('services.show', $service) }}" class="btn btn-info btn-sm me-1" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm me-1" title="Edit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center py-4 text-muted bg-light rounded-3">No services found. <br><small>Add your first service using the green button above!</small></td></tr>
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
