<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookhistory extends Model
{
    use HasFactory;
    
    protected $table = "bookings";
    protected $primaryKey = "booking_id";
}
