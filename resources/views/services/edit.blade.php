@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Edit Service</h2>
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="service_name" class="form-label">Service Name</label>
            <input type="text" class="form-control rounded-3" name="service_name" id="service_name" value="{{ $service->service_name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control rounded-3" name="price" id="price" value="{{ $service->price }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control rounded-3" name="category" id="category" value="{{ $service->category }}">
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Update Service</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
