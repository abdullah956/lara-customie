<?php

namespace App\Http\Controllers;
use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
    public function insertSignUp(Request $request){
        return view("Forms.login");
    }
    public function storeSignUp(Request $request){
        $SignUp = new SignUp();
        $SignUp->id = $request->id;
        $SignUp->name = $request->name;
        $SignUp->email = $request->email;
        $SignUp->password = $request->password;
        $SignUp->save();
        return view("Home.index",["name"=>$SignUp->name]);
    }
    public function checkLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $userData = DB::table('signup_tbl')->where('email', $email)->first();
        if ($userData && $userData->email == $email && $password == $userData->password) {
            $request->session()->put('user_data', $userData);
            return view('Home.index',['name' => $userData->name]);
        } else {
            return view('Forms.login');
        }
    }
}
