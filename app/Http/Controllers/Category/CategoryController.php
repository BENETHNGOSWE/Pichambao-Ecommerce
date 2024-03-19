<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\productcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data["categories"] = productcategory::all();
    }

    public function index(){
        return view("categories.index", $this->data);
    }

    public function createcategory()
    {
        return view("categories.create", $this->data);
    }

    public function storecategory(Request $request)
    {
        $request->validate([
            "name" => "required",
            "image" => "required",
        ]);


        $category = new productcategory;

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $category->name = $request->name;
        $category->image = $file_name;

        $category->save();
        // productcategory::create($request->only("name","image"));
        return redirect()->route("categories.list")
            ->with("success", "Productcategory created well");
    }

    public function edit( Request $request, Productcategory $productcategory){
        $this->data["productcategory"] = $productcategory;
        return view("categories.edit", $this->data);
    }

    public function update(Request $request, Productcategory $productcategory){
        $request->validate([
            "name"=> "required",
            "image"=> "required",
        ]);

        try {
            DB::beginTransction();
            $productcategory->name = $request->name;
            $productcategory->image = $request->image;
            $productcategory->save();
            DB::commit();

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
