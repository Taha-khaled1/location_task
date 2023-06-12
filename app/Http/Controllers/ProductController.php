<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getNearbyProducts(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $nearestShops = Shop::select(
            'id',
            'name',
            DB::raw('(6371 * acos(cos(radians(' . $latitude . ')) * cos(radians(latitude)) * cos(radians(longitude) - radians(' . $longitude . ')) + sin(radians(' . $latitude . ')) * sin(radians(latitude)))) AS distance')
        )
        ->orderBy('distance')
        ->limit(2) 
        ->get();
        
        $shopIds = $nearestShops->pluck('id')->toArray();
        
        $products = Product::whereIn('shop_id', $shopIds)
            ->orderByRaw("FIELD(shop_id, " . implode(',', $shopIds) . ")")
            ->get();
        
        
        return response()->json($products);
    }
}
