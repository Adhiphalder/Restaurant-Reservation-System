<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingk extends Model
{
    use HasFactory;

    protected $table = "booking";
    protected $primaryKey = "booking_id";
}
