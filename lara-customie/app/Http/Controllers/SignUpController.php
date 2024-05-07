<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\Admin;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
    public function insertSignUp(Request $request)
    {
        return view("Forms.login");
    }
    public function hello()
    {
        return view("Home.hello");
    }
    public function storeSignUp(Request $request)
    {
        $SignUp = new SignUp();
        $SignUp->id = $request->id;
        $SignUp->name = $request->name;
        $SignUp->email = $request->email;
        $SignUp->password = $request->password;
        $SignUp->save();

        // Store user data in session
        $userData = [
            'id' => $SignUp->id,
            'name' => $SignUp->name,
            'email' => $SignUp->email,
        ];
        $request->session()->put('user_data', $userData);
        return view("Home.home", ["user_data" => $userData]);
    }


    public function checkLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $userData = DB::table('signup_tbl')->where('email', $email)->first();

        if ($userData && $userData->email == $email && $password == $userData->password) {
            $userArray = [
                'email' => $userData->email,
                'name' => $userData->name,
                'id' => $userData->id
            ];

            $request->session()->put('user_data', $userArray);
            return view('Home.home', ['user_data' => $userArray]);
        } else {
            return view('Forms.login');
        }
    }
    public function insertAdminSignUp(Request $request)
    {
        return view("Forms.adminForm");
    }


    public function storeAdminSignUp(Request $request)
    {
        //dd($request->all());
        $Admin = new Admin();
        $Admin->name = $request->name;
        $Admin->email = $request->email;
        $Admin->password = $request->password;
        $Admin->save();

        // Store user data in session
        $userData = [
            'name' => $Admin->name,
            'email' => $Admin->email,
        ];
        $orders = Checkout::all();

        $totalOrders = $orders->count();

        $totalPrice = $orders->sum('totalbill');
        $request->session()->put('admin_data', $userData);
        return view("Admin.index", ["admin_data" => $userData], compact('totalOrders', 'totalPrice', 'orders'));
    }
    public function checkAdminLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $userData = DB::table('admins')->where('email', $email)->first();

        if ($userData && $userData->email == $email && $password == $userData->password) {
            $userArray = [
                'email' => $userData->email,
                'name' => $userData->name,
                'id' => $userData->id
            ];
            $orders = Checkout::all();

            $totalOrders = $orders->count();

            $totalPrice = $orders->sum('totalbill');

            $request->session()->put('admin_data', $userArray);
            return view('Admin.index', ['admin_data' => $userArray], compact('totalOrders', 'totalPrice', 'orders'));
        } else {
            return view('Forms.adminForm');
        }
    }
}