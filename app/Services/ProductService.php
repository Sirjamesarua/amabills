<?php

namespace App\Services;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductService
{

    /**
     * Store a new admin
     *
     * @param  array  $data
     * @return \App\Models\Admin
     */
    public static function createProduct($data)
    {
        
        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'amount_sold' => $data['amount_sold'] ?? 12,
            'user_id' => auth()->user()->id,
        ]);

        return $product;
    }

    public static function updateProduct($data,$product)
    {
        
        $product->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'amount_sold' => $data['amount_sold'] ?? 12,
            'user_id' => auth()->user()->id,
        ]);

        $product = new ProductResource($product);

        return $product;

    }

}
