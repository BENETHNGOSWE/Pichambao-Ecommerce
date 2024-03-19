<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsideOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_name',
        'order_type',
        'order_amount',
        'order_status',
        'order_enddate',
        'order_paidedamount',
        'order_totaldeptamount',
    ];
}
