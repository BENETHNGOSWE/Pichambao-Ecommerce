<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratedproduct extends Model
{
    use HasFactory;
    protected $fillable = ['ratedname','ratedimage','ratedprice'];
}
