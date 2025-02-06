<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OutOfStockMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function build()
    {
        return $this->subject('⚠️ Productos sin stock en Shopify')
            ->view('emails.out_of_stock')
            ->with(['products' => $this->products]);
    }
}
