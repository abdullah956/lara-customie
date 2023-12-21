<?php

namespace App\Http\Controllers;

use App\Models\BannerForm;
use App\Models\Checkout;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function checkoutPage(){
        return view("Forms.checkout");
    }
    public function checkoutProduct(Request $request){  
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
        $Checkout->save();
        return view("Home.home",["name"=>$Checkout->first_name]);
    }
    public function bannerForm(Request $request){
        return view("Forms.bannerForm");
    }
    public function saveBannerData(Request $request){
        $BannerForm = new BannerForm();
        $BannerForm->id = $request->id; 
        $BannerForm->img = $request->uploadedimg;
        $BannerForm->description = $request->uploadedtext;
        $BannerForm->width = $request->width;
        $BannerForm->height = $request->height;
        $BannerForm->save();
        return view("Home.index");
    }
}

