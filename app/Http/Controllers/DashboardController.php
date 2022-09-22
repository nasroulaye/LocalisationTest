<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function restaurants(Request $request)
    {
        if (!$request->ajax()) {
            return view('restaurants');
        }
        
        $shops = Restaurants::select(['id', 'nom'])
            ->when($request->long and $request->lat, function ($query) use ($request) {
                $query->addSelect(DB::raw("ST_Distance_Sphere(
                        POINT('$request->long', '$request->lat'), POINT(longitude, latitude)
                    ) as distance"))
                    ->orderBy('distance');
            })
            ->when($request->shopName, function ($query, $shopName) {
                $query->where('restaurants.nom', 'like', "%{$shopName}%");
            })
            ->take(9)
            ->get();
        dd($shops);

        return response()->json([
            'shops' => $shops,
        ]);
    }
}
