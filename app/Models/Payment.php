<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $table = "payments";
    protected $primaryKey = "payment_id";

    protected $fillable = ['customer_id', 'booking_id', 'amount', 'paymethod'];

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
