<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewproduct extends Model
{
    use HasFactory;
    protected $fillable = ['reviewname', 'reviewimage', 'reviewprice'];
}
