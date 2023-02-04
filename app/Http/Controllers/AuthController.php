<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->withSuccess('You are loged in');
        }
        return redirect("/login")->with('fail_message','Login details are not valid');
    }

    public function register()
    {
        return view('auth.registration');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);
        return redirect("/")->withSuccess('You have signed-in');
    }

    public function create()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('home');
        }
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function orders(){
        $orders = DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('user_id','=', auth()->user()->id)
        ->select( 'users.*','orders.*','products.*')
        ->get();
        return view('orders',compact('orders'));
    }
}
