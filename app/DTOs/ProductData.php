<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
        public ?string $id,
        public string $title,
        public string $body_html,
        public string $vendor,
        public string $product_type,
        public string $status,
    ) {
    }
}
