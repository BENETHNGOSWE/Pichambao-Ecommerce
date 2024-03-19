<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Featuredproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->data["featured"] = Featuredproduct::all();
    }


    public function index()
    {
        return view("featured.index", $this->data);
    }

    public function createfeatured()
    {
        $this->data['featuredproduct'] = Featuredproduct::all();
        return view('featured.create', $this->data);
    }

    public function storefeatured(Request $request)
    {
        $request->validate([
            'name' => "required",
            'image' => "required",
            'price' => "required",
            'category' => "required",
        ]);

        $featuredproduct = new Featuredproduct;
        $file_name = time() . "." . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $featuredproduct->name = $request->name;
        $featuredproduct->price = $request->price;
        $featuredproduct->category = $request->category;
        $featuredproduct->image = $file_name;

        $featuredproduct->save();

        return redirect()->route('featured.createfeatured')
            ->with('success', "Featured Prdoct Added");
    }

    public function edit(Request $request, Featuredproduct $featuredproduct)
    {
        $this->data["featuredproduct"] = $featuredproduct;
        return view("featured.edit", $this->data);
    }

    public function update(Request $request, Featuredproduct $featuredproduct)
    {
        $request->validate([
            'name' => "required",
            'price' => "required",
            'image' => "required",
            'category' => "required",
        ]);

        try {
            DB::beginTransaction();
            $featuredproduct->name = $request->name;
            $featuredproduct->price = $request->price;
            $featuredproduct->category = $request->category;

            if ($request->hasFile("image")) {
                $destination = 'images/' . $featuredproduct->image;
                if (File::exists($destination)) {

                    File::delete($destination);
                }
                $file_name = time() . "." . request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $file_name);
                $featuredproduct->image = $file_name;
            }

            $featuredproduct->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage() . '' . $th->getTraceAsString());
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->route('indexproduct')->with('success', 'Updated');
    }


    public function delete(Request $request, Featuredproduct $featuredproduct)
    {
        $this->data['featured'] = $featuredproduct;
        $featuredproduct->delete();
        return redirect()->route('indexproduct', $featuredproduct)->with('success', 'Done');
    }
}
