<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
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
            $request->session()->put('user_data', $userData);
            return view('Home.home', ['user_data' => $userData]);
        } else {
            return view('Forms.login');
        }
    }
}
