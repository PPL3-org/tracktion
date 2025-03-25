<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCheck extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleCheckFactory> */
    use HasFactory;

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}