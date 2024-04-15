<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $primaryKey = "booking_id";
    protected $fillable = ['customer_id', 'date', 'time', 'guest_no', 'seat_no'];
}
