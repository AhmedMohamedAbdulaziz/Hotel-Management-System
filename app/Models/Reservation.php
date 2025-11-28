<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
     protected $table = 'reservations';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'created_by_employee_id');
    }

    public function rooms()
    {
        return $this->hasMany(ReservationRoom::class, 'reservation_id');
    }

    public function services()
    {
        return $this->hasMany(ReservationService::class, 'reservation_id');
    }
}
