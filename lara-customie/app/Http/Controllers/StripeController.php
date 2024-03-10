<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        $cartItems = json_decode($request->input('cartItems'), true);
        //dd($cartItems);
        $Checkout = new Checkout();
        $Checkout->id = $request->id;
        $Checkout->first_name = $request->fname;
        $Checkout->last_name = $request->lname;
        $Checkout->email = $request->email;
        $Checkout->phone = $request->phone;
        $Checkout->country = $request->country;
        $Checkout->state = $request->state;
        $Checkout->city = $request->city;
        $Checkout->zip = $request->zip;
        $Checkout->shipping_address = $request->saddress;
        $Checkout->billing_address = $request->baddress;
        $Checkout->payment_method = $request->money;
        $Checkout->totalbill = $request->totalbill;
        // $Checkout->cart_items = $cartItems;
        $Checkout->cart_items = json_encode($cartItems);
        $Checkout->save();
        // $cartItems2 = json_decode($Checkout->cart_items, true);
        if ($request->money === 'banktransfer') {
            \Stripe\Stripe::setApiKey(config('stripe.sk'));
            $totalPrice = $request->get('totalbill');

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
                'success_url' => route('suc'),
                'cancel_url' => url('/checkout'),
            ]);

            return redirect()->away($session->url);
        }
        // If the payment method is not 'banktransfer,' redirect to home.index
        return view("Home.thanks");
    }

}
