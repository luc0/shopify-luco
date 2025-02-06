<?php

namespace App\Jobs;

use App\Mail\OutOfStockMail;
use App\Services\ProductService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CheckOutOfStockJob implements ShouldQueue
{
//    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use Queueable;

    protected string $emailRecipient;

    public function __construct(string $emailRecipient = 'lucianoperezt@gmail.com')
    {
        $this->emailRecipient = $emailRecipient;
    }

    public function handle()
    {
        $shopifyService = app(ProductService::class);
        $products = $shopifyService->getProducts();

        $outOfStockProducts = [];

        foreach ($products as $product) {
            $stock = $product['variants'][0]['inventory_quantity'] ?? 0;

            if ($stock === 0) {
                $outOfStockProducts[] = [
                    'id' => $product['id'],
                    'title' => $product['title'],
                ];
            }
        }

        if (!empty($outOfStockProducts)) {
            Mail::to($this->emailRecipient)->queue(new OutOfStockMail($outOfStockProducts));

            Log::warning('Productos sin stock:', $outOfStockProducts);
        }
    }
}
