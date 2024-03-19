<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Latestproduct;
use Illuminate\Http\Request;
use App\Models\Featuredproduct;
use App\Models\cart;

class ShopcartController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['details'] = Featuredproduct::all();
        
        
    }


    public function index(){
        $this->data['cartItems'] = cart::where('user_id', auth()->id())->get();
        return view("shops.shopcart", $this->data);
    }


    public function addToCart($id)
    {
        $latest = Featuredproduct::findorFail($id);

        $cart = Cart::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $latest->id],
            [
                'name' => $latest->name,
                'image' => $latest->image,
                'price' => $latest->price,
                'quantity' => 1,
            ]
        
        );
    
        return redirect()->back()->with('success', 'Product added');
      
    }
}


  // $latest = Featuredproduct::findOrFail($id);
        // $cart = session()->get('cart', []);

        // if (isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        // } else {
        //     $cart[$id] = [
        //         'image'=> $latest->image,
        //         'name ' => $latest->name,
        //         'price' => $latest->price,
        //         'quantity' => 1
        //     ];
        // }

        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added');