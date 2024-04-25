<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $table = "bookings";
    protected $primaryKey = "booking_id";
    protected $fillable = ['customer_id', 'date', 'time', 'guest_no', 'seat_no'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}
