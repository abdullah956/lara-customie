<?php

namespace App\Http\Controllers;
use App\Models\SignUp;
use Illuminate\Http\Request;

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
}
