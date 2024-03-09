<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function showPage(Request $request)
    {
        $productId = $request->input('product_id');
        // dd($productId);
        // $product = Product::find($productId);
        $product = Product::where('serial_no', $productId)->first();
        return view('Forms.bannerForm', ['product' => $product]);
    }
    public function showPage1(Request $request)
    {
        $productId = $request->input('product_id');
        // dd($productId);
        // $product = Product::find($productId);
        $product = Product::where('serial_no', $productId)->first();
        return view('Forms.bannerForm1', ['product' => $product]);
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
    public function showbanner()
    {
        $birth = Product::where('product_type', 'birthdays')->get();
        $wed = Product::where('product_type', 'weddings')->get();
        $fun = Product::where('product_type', 'functions')->get();

        $products = [
            'birth' => $birth,
            'wed' => $wed,
            'fun' => $fun,
        ];
        // dd($products);
        return view('Catagories.catagoryBanner', ['products' => $products]);
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

        $imagePath = $request->picture->hashName();

        $request->picture->move(public_path('products'), $imagePath);

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

        $orders = Checkout::all();

        $totalOrders = $orders->count();

        $totalPrice = $orders->sum('totalbill');

        $filteredOrders = $orders->filter(function ($order) {
            return $order->created_at >= Carbon::now()->subMonths(3);
        });

        $ordersChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            return $monthOrders->count();
        });

        $earningsChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            return $monthOrders->sum('totalbill');
        });

        $aovChartData = $filteredOrders->groupBy(function ($order) {
            return $order->created_at->format('M Y');
        })->map(function ($monthOrders) {
            $totalEarnings = $monthOrders->sum('totalbill');
            $totalOrders = $monthOrders->count();

            return $totalOrders > 0 ? round($totalEarnings / $totalOrders, 2) : 0;
        });

        return view('Admin.analytics', compact('totalOrders', 'totalPrice', 'orders', 'ordersChartData', 'earningsChartData', 'aovChartData'));

    }
    public function showOrdersPage()
    {
        $orders = Checkout::all();

        $totalOrders = $orders->count();

        $totalPrice = $orders->sum('totalbill');

        return view('Admin.index', compact('totalOrders', 'totalPrice', 'orders'));
    }
    public function showcartitems(Request $request)
    {
        $request->validate([
            'orderSummaryJson' => 'required|string',
        ]);

        $orderSummaryJson = $request->input('orderSummaryJson');

        $orderSummaryData = json_decode($orderSummaryJson, true);

        return view('Home.cart', ['orderSummaryData' => $orderSummaryData]);
    }

    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        // dd($product_id);
        $uploadedtext = $request->input('uploadedtext');
        $width = $request->input('width');
        $height = $request->input('height');
        $total = $request->input('total');

        $product = Product::where('serial_no', $product_id)->first();
        $actualImage = $product->picture;

        $uploadedImage = $request->file('uploadedimg');

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
        ];

        $request->session()->push('cart', $cartItem);

        return redirect()->route('cart');
    }
    public function store1(Request $request)
    {
        $product_id = $request->input('product_id');
        // dd($product_id);
        $uploadedtext = $request->input('uploadedtext');

        $width = null;
        $height = null;
        $total = $request->input('total');

        $product = Product::where('serial_no', $product_id)->first();
        $actualImage = $product->picture;

        $uploadedImage = $request->file('uploadedimg');

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
        ];

        $request->session()->push('cart', $cartItem);

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
            $uploadedtext = $cartItem['uploadedtext'];
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
        $cartItems = session()->get('cart', []);

        $index = array_search($randomNumber, array_column($cartItems, 'random'));

        if ($index !== false) {
            unset($cartItems[$index]);
            session(['cart' => array_values($cartItems)]);
        }

        return response()->json(['success' => true]);
    }

}







