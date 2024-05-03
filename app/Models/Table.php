<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = "tables";
    protected $primaryKey = "table_id";

    // protected $fillable = ['table_id', 'table_no', 'table_seat_no', 'table_book_status'];
    protected $fillable = ['table_id', 'table_no', 'table_seat_no', 'table_book_status'];
}
