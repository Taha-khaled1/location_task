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
    
        // Get the IDs of the nearest shops based on distance
        $nearestShops = Shop::select(
            'id',
            'name',
            DB::raw('(6371 * acos(cos(radians(' . $latitude . ')) * cos(radians(latitude)) * cos(radians(longitude) - radians(' . $longitude . ')) + sin(radians(' . $latitude . ')) * sin(radians(latitude)))) AS distance')
        )
            ->orderBy('distance')
            ->limit(2)
            ->get();
    
        $shopIds = $nearestShops->pluck('id')->toArray();
    
        // Retrieve products based on the specified order
        $products = Product::whereIn('shop_id', $shopIds)
            ->leftJoin('orders', 'products.id', '=', 'orders.product_id')
            ->select(
                'products.id',
                'products.price',
                'products.category_id',
                'products.shop_id',
                DB::raw('SUM(orders.quantity) as total_quantity'),
                DB::raw('FIELD(shop_id, ' . implode(',', $shopIds) . ') as shop_order')
            )
            ->groupBy('products.id', 'products.price', 'products.category_id', 'products.shop_id')
            ->orderByDesc('total_quantity') // Sort by best-selling (based on total quantity ordered)
            ->orderBy('shop_order') // Sort by proximity to the location
            ->orderByDesc('products.created_at') // Sort by new products
            ->orderBy('products.id') // Sort by regular products
            ->get();
    
        return response()->json($products);
    }
    
    
    
    
    
}
