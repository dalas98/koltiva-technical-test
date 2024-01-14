<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    function getStringOfIndex(Request $request) {
        $result = null;
        $alphabet = 'XabcdeFghijkLmnopqRstuvw';
        $indexInput = $request->index;

        $alphabetArr = str_split($alphabet);
        $resultIndex = $indexInput % count($alphabetArr);
        $result = $alphabetArr[$resultIndex];

        return [
            "message" => "Your Character at index ".$indexInput." is: ".$result
        ];
    }

    function vehicle(Request $request) {
        $getFrequently = DB::select('CALL get_frequently_number()');

        $getVehicle = Vehicle::select('vehicles.nopol', 'vehicle_regions.region')
        ->join('vehicle_regions', DB::raw("SUBSTRING_INDEX(`vehicles`.`nopol`, ' ', 1)"), '=', 'vehicle_regions.prefix')
        ->get();

        return [
            'frequently_number' => $getFrequently,
            'data' => $getVehicle
        ];
    }
}
