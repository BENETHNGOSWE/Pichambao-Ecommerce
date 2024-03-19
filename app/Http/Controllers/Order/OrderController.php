<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\InsideOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['orders'] = InsideOrder::orderBy('created_at', 'desc')->get();
    }

    public function index(){
        return view('backend.orders.index', $this->data);
    }

    public function create(){
        return view('backend.orders.create', $this->data);
    }

    public function validated_order(Request $request){
        return $request->validate([
            'order_name'=> 'required',
            'order_type'=> 'required',
            'order_amount'=> 'required',
            'order_paidedamount'=> 'required',
            'order_enddate'=> 'nullable'
        ]);
    }

    public function store(Request $request){
        $validate = $this->validated_order($request);

        try {
            DB::beginTransaction();
            $totalamountremain = $validate['order_amount'] - $validate['order_paidedamount'];
            $validate['order_totaldeptamount'] = $totalamountremain;

            if ($totalamountremain == 0){
                $validate['order_status'] = 'paid';
            }
            elseif ($totalamountremain == $validate['order_amount']){
                $validate['order_status'] = 'unpaid';
            }
            else {
                $validate['order_status'] = 'partial';
            }


            $order = new InsideOrder();
            $order->fill($validate);
            $order->save();
            DB::commit();
            
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). '' .$th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('orders.list');
        // return redirect()->route('orders.list')->with('sucess', 'Order Keep sucessfully');
    }

    public function edit(Request $request, InsideOrder $insideOrder){
        $this->data['orders'] = $insideOrder;
        return view('backend.orders.edit', $this->data);
    }

    public function update(Request $request, InsideOrder $insideOrder){
        $validate = $this->validated_order($request);

        try {
            DB::beginTransaction();

            $totalamountremain = $validate['order_amount'] - $validate['order_paidedamount'];
            $validate['order_totaldeptamount'] = $totalamountremain;

            if ($totalamountremain == 0){
                $validate['order_status'] = 'paid';
            }
            elseif ($totalamountremain == $validate['order_amount']){
                $validate['order_status'] = 'unpaid';
            }
            else {
                $validate['order_status'] = 'partial';
            }


            $insideOrder->fill($validate);
            $insideOrder->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). '' . $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('orders.list');
    }


    public function show(InsideOrder $insideOrder){
        $this->data['orders'] = $insideOrder;
        return view('backend.orders.show', $this->data);
    }


    public function delete(Request $request, InsideOrder $insideOrder){
        $this->data['orders'] = $insideOrder;
        $insideOrder->delete();
        return to_route('orders.list');

    }
}
