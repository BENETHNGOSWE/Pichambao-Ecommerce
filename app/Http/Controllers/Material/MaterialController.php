<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\CompanyMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class MaterialController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['materials'] = CompanyMaterial::all();
    }

    public function index(){
        return view('backend.materials.index', $this->data);
    }

    public function create(){
        return view('backend.materials.create', $this->data);
    }

    public function Validate_material(Request $request){
        return $request->validate([
            'material_name'=> 'required',
            'material_size'=> 'required',
            'material_quatity'=> 'required',
            'material_price'=> 'required',
            'material_buyingdate'=> 'required',
        ]);
    }

    public function store(Request $request){
        $validate = $this->Validate_material($request);

        try {
            DB::beginTransaction();

            $totalprice = $validate['material_quatity'] * $validate['material_price'];
            $validate['total_price'] = $totalprice;
            $material = new CompanyMaterial();
            $material->fill($validate);
            $material->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). '' .$th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return redirect()->route('materials.list')->with('success','Material Created Succesfully');
    }

    public function edit(Request $request, CompanyMaterial $material){
        $this->data['materials'] = $material;
        return view('backend.materials.edit', $this->data);
    }

    public function update(Request $request, CompanyMaterial $material){ 
        $validate = $this->Validate_material($request);

        try {
            DB::beginTransaction();
            $material->fill($validate);
            $material->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return redirect()->route('materials.list')->with('success','Material Updated Sucessfully');
    }

    public function delete(Request $request, CompanyMaterial $material){
        $this->data['materials'] = $material;
        $material->delete();
        return redirect()->route('materials.list')->with('success','Materials Deleted Successfully');
    }




}
