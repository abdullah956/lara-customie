<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $totalPrice = $request->get('total');

        // Convert total to cents and round to the nearest whole number
        $totalInCents = round($totalPrice * 100);

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'PKR',
                        'unit_amount' => $totalInCents,
                        'product_data' => [
                            'name' => 'Your Product Name',
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('Home.Cart'),
            'cancel_url' => route('Form.Checkout'),
        ]);

        return redirect()->away($session->url);
    }
}
