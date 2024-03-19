<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Featuredproduct;
use App\Models\Latestproduct;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\ratedproduct;
use App\Models\Reviewproduct;

class DashboardController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['featured'] = Featuredproduct::all();
        $this->data['products'] = Product::all();
        $this->data['categories'] = ProductCategory::all();
        $this->data['featured'] = Featuredproduct::where('category', 'featured')->get();
        $this->data['latest'] = Featuredproduct::where('category', 'latest')->take(3)->get();
        $this->data['rated'] = Featuredproduct::where('category', 'rated')->take(3)->get();
        $this->data['reviews'] = Featuredproduct::where('category', 'review')->take(3)->get();
    }
    public function index_dashboard(){
        return view("backend.dashboard.home", $this->data);
    }
}
