@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Edit Room Type</h2>
    <form action="{{ route('room_types.update', $roomType) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type_name" class="form-label">Type Name</label>
            <input type="text" class="form-control rounded-3" name="type_name" id="type_name" value="{{ $roomType->type_name }}" required>
        </div>
        <div class="mb-3">
            <label for="base_price_per_night" class="form-label">Base Price Per Night</label>
            <input type="number" step="0.01" class="form-control rounded-3" name="base_price_per_night" id="base_price_per_night" value="{{ $roomType->base_price_per_night }}" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control rounded-3" name="capacity" id="capacity" value="{{ $roomType->capacity }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control rounded-3" name="description" id="description">{{ $roomType->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="amenities" class="form-label">Amenities (as JSON)</label>
            <input type="text" class="form-control rounded-3" name="amenities" id="amenities" value="{{ $roomType->amenities }}">
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Update Room Type</button>
        <a href="{{ route('room_types.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
