@extends('layouts.layouts')
@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Edit Room</h2>
    <form action="{{ route('rooms.update', $room) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="room_number" class="form-label">Room Number</label>
            <input type="text" class="form-control rounded-3" name="room_number" id="room_number" value="{{ $room->room_number }}" required>
        </div>
        <div class="mb-3">
            <label for="room_type_id" class="form-label">Room Type ID</label>
            <input type="number" class="form-control rounded-3" name="room_type_id" id="room_type_id" value="{{ $room->room_type_id }}" required>
        </div>
        <div class="mb-3">
            <label for="floor" class="form-label">Floor</label>
            <input type="number" class="form-control rounded-3" name="floor" id="floor" value="{{ $room->floor }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control rounded-3" name="status" id="status">
                <option value="Available" @if($room->status=='Available') selected @endif>Available</option>
                <option value="Occupied" @if($room->status=='Occupied') selected @endif>Occupied</option>
                <option value="Maintenance" @if($room->status=='Maintenance') selected @endif>Maintenance</option>
                <option value="Cleaning" @if($room->status=='Cleaning') selected @endif>Cleaning</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="is_smoking" class="form-label">Smoking</label>
            <select class="form-control rounded-3" name="is_smoking" id="is_smoking">
                <option value="0" @if(!$room->is_smoking) selected @endif>No</option>
                <option value="1" @if($room->is_smoking) selected @endif>Yes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-gradient-primary mt-2 px-4">Update Room</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary mt-2 ms-2">Cancel</a>
    </form>
</div>
<style>
.btn-gradient-primary {background: linear-gradient(60deg,#66bb6a,#43a047);color:#fff;border:0;}
.btn-gradient-primary:hover {background: linear-gradient(60deg,#388e3c,#2e7d32);color:#fff;}
</style>
@endsection
