<?php

namespace App\Http\Controllers;

use App\Models\BannerForm;
use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function showCheckoutPage()
    {

        $total = request()->input('total', 0);

        return view('Forms.checkout', compact('total'));
    }
    // public function checkoutProduct(Request $request)
    // {
    //     $Checkout = new Checkout();
    //     $Checkout->id = $request->id;
    //     $Checkout->first_name = $request->fname;
    //     $Checkout->last_name = $request->lname;
    //     $Checkout->email = $request->email;
    //     $Checkout->phone = $request->phone;
    //     $Checkout->country = $request->country;
    //     $Checkout->state = $request->state;
    //     $Checkout->city = $request->city;
    //     $Checkout->zip = $request->zip;
    //     $Checkout->shipping_address = $request->saddress;
    //     $Checkout->billing_address = $request->baddress;
    //     $Checkout->payment_method = $request->money;
    //     $Checkout->totalbill = $request->totalbill;
    //     $Checkout->save();
    //     return view("Home.home", ["name" => $Checkout->first_name]);
    // }
    public function bannerForm(Request $request)
    {
        return view("Forms.bannerForm");
    }
    public function addProduct(Request $request)
    {
        return view("Admin.addProducts");
    }
    public function inventory(Request $request)
    {
        $products = Product::all();
        return view("Admin.inventory", compact('products'));
    }
    public function productStore(Request $request)
    {
        $Product = new Product();
        $Product->id = $request->id;
        $Product->product_catagory = $request->product_type;
        $Product->product_type = $request->category;

        // Get the original name of the uploaded file
        $imagePath = $request->picture->hashName();

        // Move the uploaded file to the 'products' directory and store it with the original name
        $request->picture->move(public_path('products'), $imagePath);

        // Save the image path to the database
        $Product->picture = 'products/' . $imagePath;
        $Product->name = $request->name;
        $Product->price = $request->price;
        $Product->serial_no = $request->serial_no;
        $Product->quantity = $request->quantity;
        $Product->save();
        return redirect()->route('addProduct')->with('success', 'Product saved successfully.');

    }

    public function analytics(Request $request)
    {
        // Fetch orders from the database
        $orders = Checkout::all();

        // Total number of orders
        $totalOrders = $orders->count();

        // Total price from all orders
        $totalPrice = $orders->sum('totalbill');

        // Filter orders for the last 2-3 months
        $filteredOrders = $orders->filter(function ($order) {
            return $order->created_at >= Carbon::now()->subMonths(3);
        });

        // Prepare data for the chart
        $ordersChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            return $monthOrders->count();
        });

        // Calculate earnings for each month
        $earningsChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            return $monthOrders->sum('totalbill');
        });

        // Calculate AOV for each month
        $aovChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            $totalEarnings = $monthOrders->sum('totalbill');
            $totalOrders = $monthOrders->count();

            // Calculate Average Order Value (AOV)
            return $totalOrders > 0 ? round($totalEarnings / $totalOrders, 2) : 0;
        });



        // Pass orders and chart data to the view
        return view('Admin.analytics', compact('totalOrders', 'totalPrice', 'orders', 'ordersChartData', 'earningsChartData', 'aovChartData'));

    }
    public function saveBannerData(Request $request)
    {
        $BannerForm = new BannerForm();
        $BannerForm->id = $request->id;
        $BannerForm->img = $request->uploadedimg;
        $BannerForm->description = $request->uploadedtext;
        $BannerForm->width = $request->width;
        $BannerForm->height = $request->height;
        $image = time() . '.' . $request->uploadedimg->extension();
        $request->uploadedimg->move(public_path('products'), $image);
        $BannerForm->save();
        return view("Home.index");
    }
    public function showOrdersPage()
    {
        // Fetch orders from the database
        $orders = Checkout::all();

        // Total number of orders
        $totalOrders = $orders->count();

        // Total price from all orders
        $totalPrice = $orders->sum('totalbill');


        // Pass orders and chart data to the view
        return view('Admin.index', compact('totalOrders', 'totalPrice', 'orders'));
    }

}

