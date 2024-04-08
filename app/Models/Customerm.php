<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerm extends Model
{
    use HasFactory;

    protected $table = "customerms";
    protected $primaryKey = "customer_id";
}
