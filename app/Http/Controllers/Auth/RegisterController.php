<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class RegisterController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['user']= User::all();
    }

    public function register(){
        return view("auth.registers.register", $this->data);
    }

    public function registerpost( Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        

        if ($request->has('is_admin') && $request->is_admin) {
            $user->is_admin = true;
        } else {
            $user->is_admin = false;
        }

        $user->save();

        // Redirect the user based on their type
        if ($user->is_admin) {
            return redirect()->route("admin.dashboard")->with("success", "Admin successfully registered");
        } else {
            return redirect()->route("login")->with("success", "User successfully registered");
        }
        
        // return redirect()->route("login")->with("success","Successfully Registered");
    }

    public function login(Request $request){
        return view("auth.registers.register");
    }

    public function loginpost(Request $request){
        // $credetials = [
        //     "email"=> $request->email,
        //     "password"=> $request->password,
        // ];

        // if (Auth::attempt($credetials)) {
        //     return redirect('dashboard')->with('success', 'Login Success');
        // }
 
        // return back()->with('error', 'Error Email or Password');


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->is_admin) {
                // Admin user
                return redirect()->route('dashboard')->with('success', 'Admin login success');
            } else {
                // Regular user
                return redirect()->route('shopcartadd')->with('success', 'User login success');
            }
        }
    
        return back()->withInput($request->only('email'))->with('error', 'Error Email or Password');
    }


    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login.registers');
    }

}