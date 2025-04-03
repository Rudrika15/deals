<?php

// app/Http/Controllers/LocationController.php
namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $user = Auth::user();

        if ($user) {
            // Use the location relationship to store or update the location data
            $user->location()->updateOrCreate(
                [], // Empty array means it will match on user_id automatically
                [
                    'latitude' => $request->input('latitude'),
                    'longitude' => $request->input('longitude'),
                ]
            );

            return response()->json(['message' => 'Location saved successfully in the database']);
        }

        return response()->json(['message' => 'User is not authenticated'], 401);
    }
    // this is a session store 
    public function getlocalstoragedata(Request $request){

        session()->put('city', $request->input('city'));
        session()->put('latitude', $request->input('latitude'));
        session()->put('longitude', $request->input('longitude'));    
        return response()->json(['success' => 'Location data saved successfully!']);
    
    }
    public function findUsersByCity(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // Reverse Geocoding using Nominatim (you can replace with another service if needed)
        $geocodeUrl = "https://nominatim.openstreetmap.org/reverse?lat=$latitude&lon=$longitude&format=json";

        // Perform the reverse geocoding to get the city
        $geocodeData = file_get_contents($geocodeUrl);
        $locationData = json_decode($geocodeData, true);

        if (isset($locationData['address']['city'])) {
            $city = $locationData['address']['city'];

            // Find users by the city name
            $users = DB::table('users')
                ->where('city', 'LIKE', '%' . $city . '%')
                ->get();

            return response()->json([
                'city' => $city,
                'users' => $users,
            ]);
        } else {
            return response()->json([
                'message' => 'City not found for the provided latitude and longitude.'
            ], 404);
        }
    }
}
