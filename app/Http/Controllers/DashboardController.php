<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) {
            return view('restaurants');
        }
        
        $restaurants = Restaurants::select(["*"])
            ->when($request->long and $request->lat, function ($query) use ($request) {
                $query->addSelect(DB::raw("ST_Distance_Sphere(
                        POINT('$request->long', '$request->lat'), POINT(longitude, latitude)
                    ) as distance"))
                    ->orderBy('distance');
            })
            ->when($request->restaurantName, function ($query, $restaurantName) {
                $query->where('restaurants.nom', 'like', "%{$restaurantName}%");
            })
            ->take(9)
            ->get();
            
        return response()->json([
            'restaurants' => $restaurants,
        ]);
    }
}
