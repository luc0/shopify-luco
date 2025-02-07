<?php

namespace App\Http\Controllers\Api;

use App\DTOs\ProductData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    /* TODO:
        ShopifyClass
        - la response podria ser un resource de laravel o un response. Con el formato de respuesta del product.
        Borrar lo viejo:
        - shopify-app config.
        - lo comentado en routes, etc.
        RATE LIMIT:
        - ver rate_limits? https://shopify.dev/docs/api/partner#rate_limits
        ERROR CODES:
        - manejar errores: https://shopify.dev/docs/api/partner#status_and_error_codes
    */
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function list() {
        return $this->productService->getProducts();
    }

    public function create(ProductData $productData) {
        return $this->productService->create($productData);
    }

    public function update(ProductData $productData) {
        // fix this
        return $this->productService->update($productData);
    }
}
