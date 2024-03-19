<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        "material_name",
        "material_size",
        "material_quatity",
        "material_price",
        "material_buyingdate",
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($material) {
            $material->total_price = $material->material_quatity * $material->material_price;
        });
    }
}
