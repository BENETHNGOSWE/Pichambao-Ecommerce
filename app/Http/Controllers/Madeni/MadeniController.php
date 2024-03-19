<?php

namespace App\Http\Controllers\Madeni;

use App\Http\Controllers\Controller;
use App\Models\CompanyMadeni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MadeniController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['debtors'] = CompanyMadeni::orderBy('created_at', 'desc')->get();
    }

    public function index(){
        return view('backend.madeni.index', $this->data);
    }

    public function create(Request $request){
        return view('backend.madeni.create', $this->data);
    }


    public function validate_madeni(Request $request){
        return  $request->validate([
            'debtor_name'=> 'required',
            'debtor_phonenumber'=> 'required',
            'debtor_address'=> 'required',
            'material_taken'=> 'required',
            'payment_date'=> 'required',
            'amount'=> 'required',
            
        ]);    
    }

    public function store(Request $request){
        $validate = $this->validate_madeni($request);

        try {
            DB::beginTransaction();
            $madeni = new CompanyMadeni();
            $madeni->fill($validate);
            $madeni->save();
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage. '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('debtors.list');
    }

    public function edit(Request $request, CompanyMadeni $company){
        $this->data['debtors'] = $company;
        return view('backend.madeni.edit', $this->data);
    }


    public function update(Request $request, CompanyMadeni $company){
        $validate = $this->validate_madeni($request);

        try {
            DB::beginTransaction();
            $company->fill($validate);
            $company->save();
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). ''. $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('debtors.list');
    }


    public function show(CompanyMadeni $company){
        $this->data['debtors'] = $company;
        return view('backend.madeni.show', $this->data);
    }

    public function delete(CompanyMadeni $company){
        $this->data['debtors'] = $company;
        $company->delete();
        return to_route('debtors.list');
    }
}
