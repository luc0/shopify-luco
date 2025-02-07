<?php

namespace App\Services;

use App\DTOs\ProductData;
use Illuminate\Support\Facades\Http;

class ShopifyProductService
{
    public function getProducts() {
        $response = Http::get(config('shopify.api.products') . '.json');
        return $response->json()['products'];
    }

    public function create(ProductData $productData) {
        $response = Http::withHeaders([
            'X-Shopify-Access-Token' => config('shopify.access_token'),
            'Content-Type' => 'application/json',
        ])->post(config('shopify.api.products') . '.json', [
            'product' => $productData
        ]);

        return $response->json();
    }

    public function update(ProductData $productData) {
        $response = Http::withHeaders([
            'X-Shopify-Access-Token' => config('shopify.access_token'),
            'Content-Type' => 'application/json',
        ])->put(config('shopify.api.products') . '/' . $productData->id . '.json', [
            'product' => $productData
        ]);

        return $response->json();
    }
}
