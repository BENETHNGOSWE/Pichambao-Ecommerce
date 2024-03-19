<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMadeni extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'debtor_name',
        'debtor_phonenumber',
        'debtor_address',
        'material_taken',
        'payment_date',
        'amount',
    ];
}
