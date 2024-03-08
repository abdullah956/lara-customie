<?php

namespace App\Http\Controllers;

use App\Models\BannerForm;
use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


use App\Http\Controllers\localStorage;


class ProductController extends Controller
{
    public function showPage(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        // Perform any necessary logic and return the banners page view with the product data
        return view('Forms.bannerForm', ['product' => $product]);
    }


    public function showHome()
    {
        $cups = Product::where('product_type', 'cups')->get();
        $pillows = Product::where('product_type', 'pillows')->get();
        $clocks = Product::where('product_type', 'clocks')->get();

        $products = [
            'cups' => $cups,
            'pillows' => $pillows,
            'clocks' => $clocks,
        ];

        return view('Catagories.catagoryHome', ['products' => $products]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
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
    // public function saveBannerData(Request $request)
    // {
    //     $BannerForm = new BannerForm();
    //     $BannerForm->id = $request->id;
    //     $BannerForm->img = $request->uploadedimg;
    //     $BannerForm->act_img = $request->actualimage;
    //     $BannerForm->description = $request->uploadedtext;
    //     $BannerForm->width = $request->width;
    //     $BannerForm->height = $request->height;
    //     $BannerForm->total = $request->total;
    //     $image = time() . '.' . $request->uploadedimg->extension();
    //     $request->uploadedimg->move(public_path('uploads'), $image);
    //     $BannerForm->img = 'uploads/' . $image;
    //     $BannerForm->save();

    // }
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
    public function showcartitems(Request $request)
    {
        // Validate the form data if needed
        $request->validate([
            'orderSummaryJson' => 'required|string',
            // Add more validation rules if needed
        ]);

        // Retrieve the order summary data from the form
        $orderSummaryJson = $request->input('orderSummaryJson');

        // Decode the JSON data
        $orderSummaryData = json_decode($orderSummaryJson, true);
        // dd($orderSummaryData);

        // Pass the order summary data to the checkout view
        return view('Home.cart', ['orderSummaryData' => $orderSummaryData]);
    }

    // public function store(Request $request)
    // {
    //     // Retrieve and process the form data
    //     $product_id = $request->input('product_id');
    //     $uploadedtext = $request->input('uploadedtext');
    //     $width = $request->input('width');
    //     $height = $request->input('height');
    //     $total = $request->input('total');
    //     // Retrieve the actual image from the product (assuming 'picture' is the attribute name)
    //     $product = Product::find($product_id);
    //     $actualImage = $product->picture;

    //     // Retrieve the uploaded image file
    //     $uploadedImage = $request->file('uploadedimg');
    //     // Move the uploaded file to the storage directory
    //     $path = $uploadedImage->store('public/uploads');
    //     Storage::setVisibility($path, 'public');



    //     // Add the data to the cart or perform any other necessary actions

    //     // Use compact to send data to the 'cart' view
    //     return view(
    //         'Home.cart',
    //         compact(
    //             'product_id',
    //             'uploadedtext',
    //             'width',
    //             'height',
    //             'total',
    //             'actualImage',
    //             'uploadedImage',
    //             'path',


    //         )

    //     );
    // }

    public function store(Request $request)
    {
        // Retrieve and process the form data
        $product_id = $request->input('product_id');
        $uploadedtext = $request->input('uploadedtext');
        $width = $request->input('width');
        $height = $request->input('height');
        $total = $request->input('total');

        // Retrieve the actual image from the product (assuming 'picture' is the attribute name)
        $product = Product::find($product_id);
        $actualImage = $product->picture;

        // Retrieve the uploaded image file
        $uploadedImage = $request->file('uploadedimg');

        // Move the uploaded file to the storage directory
        $path = $uploadedImage->store('public/uploads');
        Storage::setVisibility($path, 'public');
        $randomNumber = mt_rand(1, 9999);
        $cartItem = [
            'product_id' => $product_id,
            'uploadedtext' => $uploadedtext,
            'width' => $width,
            'height' => $height,
            'total' => $total,
            'actualImage' => $actualImage,
            'uploadedImagePath' => $path,
            'random' => $randomNumber,
            // Store the path instead of UploadedFile instance
        ];

        // Add the cart item to the session
        $request->session()->push('cart', $cartItem);

        // Redirect to the cart view
        return redirect()->route('cart');
    }

    public function cart(Request $request)
    {
        $cartItems = $request->session()->get('cart', []);

        return view('Home.cart', compact('cartItems'));
    }
    public function cartToCheckout(Request $request)
    {
        $cartItems = json_decode($request->input('cartItems'), true);
        $total = $request->input('total');
        foreach ($cartItems as $cartItem) {
            $productId = $cartItem['product_id'];
            $quantity = $cartItem['quantity'];
            $height = $cartItem['height'];
            $width = $cartItem['width'];
            $subtotal = $cartItem['subtotal'];
            $actualImage = $cartItem['actual_image'];
            $uploadedImage = $cartItem['uploaded_image'];
            $price = $cartItem['price'];
        }
        return view('Forms.checkout', compact('cartItems', 'total'));
    }

    public function removeProduct($randomNumber)
    {
        // Retrieve the cart items from the session
        $cartItems = session()->get('cart', []);

        // Find the index of the item to remove based on the random number
        $index = array_search($randomNumber, array_column($cartItems, 'random'));

        // Remove the item if found
        if ($index !== false) {
            unset($cartItems[$index]);

            // Update the session with the modified cart items
            session(['cart' => array_values($cartItems)]);
        }

        // You can return a response if needed
        return response()->json(['success' => true]);
    }

}







