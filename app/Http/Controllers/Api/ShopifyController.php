<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ShopifyController extends Controller
{
//    public function index(Request $request) {
//        $shop = Auth::user();
//        $domain = $shop->getDomain()->toNative();
//        $shopApi = $shop->api()->rest('GET', '/admin/shop.json')['body']['shop'];
////
//        Log::info("Shop {$domain}'s object:" . json_encode($shop));
//        Log::info("Shop {$domain}'s API objct:" . json_encode($shopApi));
//        return;
//    }
//
//    public function authenticate(Request $request)
//    {
//        $shop = Auth::user();
////        $user = auth()->user();
//
//        dd($shop);
////        if (!$shop) {
////            return redirect('/')->withErrors(['shop' => 'Shop parameter is required']);
////        }
////
////        // Start the OAuth flow
////        $domain = ShopDomain::fromNative($shop);
////        $this->shopSession->setDomain($domain);
////
////        $authUrl = $this->shopSession->getAuthUrl();
////        return redirect($authUrl);
//    }
}
