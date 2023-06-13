<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPreferencesController extends Controller
{
    public function likeProduct(Request $request)
    {
        $userId = $request->user_id; // Assuming you are using authentication
    
    
        $product = Product::find($request->product_id);
    
        // Check if the product exists
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    
        $categoryId = $product->category_id;
    
        // Check if the user has already liked a product from the category
        $userPreference = UserPreference::where('user_id', $userId)
            ->where('category_id', $categoryId)
            ->first();
    
        // Update or create user preferences for the category
        if ($userPreference) {
            $userPreference->weight += 1;
            $userPreference->save();
        } else {
            UserPreference::create([
                'user_id' => $userId,
                'category_id' => $categoryId,
                'weight' => 1
            ]);
        }
    
        return response()->json(['message' => 'Product liked successfully']);
    }
    
    
    
}
