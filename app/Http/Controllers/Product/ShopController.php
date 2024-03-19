<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Featuredproduct;
use App\Models\Product;
use App\Models\cart;
use App\Models\productcategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['products']= Product::all();
        $this->data['categories']=productcategory::all();
        $this->data['featured']=Featuredproduct::where('category', 'featured')->get();
        $this->data['latest']=Featuredproduct::where('category', 'featured')->take(3)->get();
        $this->data['rated'] = Featuredproduct::all();
        $this->data['cartItems'] = cart::where('user_id', auth()->id())->get();
    }

    public function shopviews()
    {
        return view('shops/shopviews', $this->data);
    }

    public function show($id)
    {
        $this->data['latest'] = Featuredproduct::find($id);
        $this->data['categories'] = ProductCategory::all();

        if (!$this->data['latest']) {
            return redirect()->route('404');
        }

        return view('shops/shopdetails', $this->data);
    }





}
