<?php

namespace Database\Seeders;

use App\Models\VehicleRegion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        $region = new VehicleRegion();
        $region->insert([
            ['prefix' => 'KB', 'region' => 'Kalimantan Barat'],
            ['prefix' => 'AA', 'region' => 'Temanggung'],
            ['prefix' => 'B ', 'region' => 'Jakarta'],
            ['prefix' => 'AD', 'region' => 'Surakarta'],
        ]);
    }
}
