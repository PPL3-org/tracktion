<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Shipment;
use App\Models\Truck;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Truck::factory()->create();
        Driver::factory(15)->create();
        Shipment::factory(5)->create();
    }
}