<?php

namespace App\Http\Controllers;

use App\Models\Featuredproduct;
use App\Models\Latestproduct;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\ratedproduct;
use App\Models\Reviewproduct;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data['featured'] = Featuredproduct::where('category', 'featured')->get();
        $this->data['products'] = Product::all();
        $this->data['categories'] = ProductCategory::all();
        $this->data['featured'] = Featuredproduct::where('category', 'featured')->get();
        $this->data['latest'] = Featuredproduct::where('category', 'latest')->take(3)->get();
        $this->data['rated'] = Featuredproduct::where('category', 'rated')->take(3)->get();
        $this->data['reviews'] = Featuredproduct::where('category', 'review')->take(3)->get();
        $this->data['cartItems'] = cart::where('user_id', auth()->id())->get();
    }


    public function index()
    {
        return view('index', $this->data);
    }



    // for product 
    public function indexproduct()
    {
        $this->data['companyproducts'] = Product::all();
        return view('products.index', $this->data);
    }

    public function create()
    {
        return view("products.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);

        Product::create($request->only("name"));
        return redirect()->route("index")
            ->with("success", "Successfully Product Added");
    }
























    // public function createlatest() {
    //     $latestProducts = Latestproduct::latest()->take(6)->get(); 

    //     return view('latest.create', compact('latestProducts'));
    // }

    // public function storelatest(Request $request) {
    //     $request->validate([
    //         'latestname'=>"required",
    //         'latestimage'=>"required",
    //         'latestprice'=>"required",
    //     ]);

    //     $latest = new Latestproduct;
    //     $file_name = time() .".".request() -> latestimage -> getClientOriginalExtension();    
    //     request()->latestimage->move(public_path('images'), $file_name);

    //     $latest -> latestname = $request -> latestname;
    //     $latest -> latestprice = $request -> latestprice;
    //     $latest -> latestimage = $file_name;

    //     $latest -> save();

    //     return redirect()-> route('index')
    //     ->with('success', "Latest Prdoct Added");
    // }



    //   public function createreview() {
    //     $ReviewProducts = Reviewproduct::latest()->take(6)->get(); 

    //     return view('rated.create', compact('ReviewProducts'));
    // }

    // public function storereview(Request $request) {
    //     $request->validate([
    //         'reviewname'=>"required",
    //         'reviewimage'=>"required",
    //         'reviewprice'=>"required",
    //     ]);

    //     $reviews = new Reviewproduct;
    //     $file_name = time() .".".request() -> reviewimage -> getClientOriginalExtension();    
    //     request()->reviewimage->move(public_path('images'), $file_name);

    //     $reviews -> reviewname = $request -> reviewname;
    //     $reviews -> reviewprice = $request -> reviewprice;
    //     $reviews -> reviewimage = $file_name;

    //     $reviews -> save();

    //     return redirect()-> route('index')
    //     ->with('success', "Review Product Added");
    // }


    // public function createrated() {
    //     $RatedProducts = ratedproduct::latest()->take(6)->get();

    //     return view('rated.create', compact('RatedProducts'));
    // }

    // public function storerated(Request $request) {
    //     $request->validate([
    //         'ratedname'=>"required",
    //         'ratedimage'=>"required",
    //         'ratedprice'=>"required",
    //     ]);

    //     $rated = new ratedproduct;
    //     $file_name = time() .".".request() -> ratedimage -> getClientOriginalExtension();    
    //     request()->ratedimage->move(public_path('images'), $file_name);

    //     $rated -> ratedname = $request -> ratedname;
    //     $rated -> ratedprice = $request -> ratedprice;
    //     $rated -> ratedimage = $file_name;

    //     $rated -> save();

    //     return redirect()-> route('index')
    //     ->with('success', "Rated Product Added");
    // }


}
