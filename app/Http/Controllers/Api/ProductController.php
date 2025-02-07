<?php

namespace App\Http\Controllers\Api;

use App\DTOs\ProductData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ShopifyProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    private ShopifyProductService $productService;

    public function __construct(ShopifyProductService $productService)
    {
        $this->productService = $productService;
    }

    public function list() {
        try {
            $data = $this->productService->getProducts();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error communicating with the external service..',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function create(ProductData $productData) {
        try {
            return $this->productService->create($productData);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error communicating with the external service..',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function update(Request $request) {
        $productData = ProductData::from($request->all());

        try {
            return $this->productService->update($productData);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error communicating with the external service..',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }
}
