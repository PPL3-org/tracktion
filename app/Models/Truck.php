<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    /** @use HasFactory<\Database\Factories\TruckFactory> */
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function drivers()
    {
        return $this->belongsToMany(Driver::class, 'truck_driver');
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function vehicleChecks()
    {
        return $this->hasMany(VehicleCheck::class);
    }
}
