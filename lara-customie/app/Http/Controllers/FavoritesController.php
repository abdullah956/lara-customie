<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function storeFav(Request $request)
    {
        // Check if the product already exists in favorites
        $existingFavorite = Favorite::where('user_email', $request->email)
            ->where('product_id', $request->input('product_id'))
            ->first();

        // If the product already exists, redirect back with a message
        if ($existingFavorite) {
            return redirect()->back()->with('error', 'Product already exists in favorites.');
        }

        // Otherwise, add the product to favorites
        $favorite = new Favorite();
        $favorite->user_email = $request->email;
        $favorite->product_id = $request->input('product_id');
        $favorite->product_name = $request->input('total');
        $favorite->product_price = $request->input('price');

        // Save the product picture
        $imageUrl = $request->input('actualimage');
        $fileName = basename($imageUrl);
        $fileNameToStore = 'products/' . $fileName;
        $favorite->product_picture = $fileNameToStore;

        $favorite->save();

        return view("Home.index")->with('success', 'Added to favorites successfully!');
    }

    // public function storeFav(Request $request)
    // {
    //     //dd($request->input('actualimage'));
    //     $favorite = new Favorite();
    //     $favorite->user_email = $request->email;
    //     $favorite->product_id = $request->input('product_id');
    //     $favorite->product_name = $request->input('total');
    //     $favorite->product_price = $request->input('price');
    //     //$favorite->product_price = $request->input('actualimage');

    //     // $imagePath = $request->input('actualimage');
    //     // //dd($imagePath);
    //     // $request->input('actualimage')->move(public_path('products'), $imagePath);

    //     // $favorite->picture = 'products/' . $imagePath;
    //     $imageUrl = $request->input('actualimage'); // Get the URL of the image
    //     $fileName = basename($imageUrl); // Extract the file name from the URL
    //     $fileNameToStore = 'products/' . $fileName; // Define the file path to store in the database

    //     $favorite->product_picture = $fileNameToStore; // Save the file path in the database


    //     $favorite->save();
    //     return view("Home.index");

    // }
    public function showFav(Request $request)
    {
        $userEmail = $request->session()->get('user_data')['email'];
        $favorites = Favorite::where('user_email', $userEmail)->get();

        return view("Home.fav", compact('favorites'));

    }
    public function removeFavorite(Request $request, $id)
    {
        // Find the favorite item by ID
        $favorite = Favorite::find($id);

        // Check if the favorite item exists
        if (!$favorite) {
            return redirect()->back()->with('error', 'Favorite not found.');
        }

        // Check if the logged-in user is authorized to delete the favorite item
        // For example, you may want to ensure that the user owns the favorite item
        // Here, I'm assuming you have a session variable 'user_data' containing user information
        $userEmail = $request->session()->get('user_data')['email'];
        if ($favorite->user_email !== $userEmail) {
            return redirect()->back()->with('error', 'You are not authorized to delete this favorite item.');
        }

        // Delete the favorite item
        $favorite->delete();

        return redirect()->back()->with('success', 'Favorite item removed successfully.');
    }
}
