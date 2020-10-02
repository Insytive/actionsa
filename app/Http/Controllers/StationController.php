<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use Illuminate\Support\Facades\DB;

class StationController extends Controller
{
    public function index(Request $request) {
        $stations = Station::byName($request->get('query'));

        return response()->json($stations, 200);
    }

    public function store(Request $request)
    {

    }

    public function customStation(Request $request)
    {
        // Validate the request

        $station = new Station;

        $station->name      = $request->name;
        $station->ward_id   = 0; // Make sure you have created this ward in the wards table first
        $station->approved  = 0;

        $station->save();

        if ($station->save()) {
            return response()->json([
                'status' => true,
                'data' => $station->id
            ], 200);
        }
    }
}
