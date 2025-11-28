@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <div class="card border-0 shadow-lg rounded-4 mx-auto" style="max-width: 640px;">
      <div class="card-body p-4">
        <h2 class="fw-bold mb-4">Room Type Details</h2>
        <dl class="row mb-0">
          <dt class="col-4 text-muted">Type Name</dt><dd class="col-8">{{ $roomType->type_name }}</dd>
          <dt class="col-4 text-muted">Base Price/Night</dt><dd class="col-8">{{ $roomType->base_price_per_night }}</dd>
          <dt class="col-4 text-muted">Capacity</dt><dd class="col-8">{{ $roomType->capacity }}</dd>
          <dt class="col-4 text-muted">Description</dt><dd class="col-8">{{ $roomType->description }}</dd>
          <dt class="col-4 text-muted">Amenities</dt><dd class="col-8">{{ $roomType->amenities }}</dd>
        </dl>
        <a href="{{ route('room_types.edit', $roomType) }}" class="btn btn-gradient-primary mt-4 px-4">Edit</a>
        <a href="{{ route('room_types.index') }}" class="btn btn-secondary mt-4 ms-2">Back</a>
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
