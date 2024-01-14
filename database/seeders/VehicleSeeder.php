<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicle = new Vehicle();
        
        $vehicle->insert([
            ['nopol' => 'KB 9234 KT'],
            ['nopol' => 'AA 3245 TYC'],
            ['nopol' => 'KB 9133 RE'],
            ['nopol' => 'B 9234 TU'],
            ['nopol' => 'AD 9124 GH'],
            ['nopol' => 'AD 9004 YGU'],
            ['nopol' => 'B 9277 IOB'],
            ['nopol' => 'AA 1143 BN'],
            ['nopol' => 'B 9234 TU'],
        ]);
    }
}
