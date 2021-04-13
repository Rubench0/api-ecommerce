<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request) {
        $delivery_date = $request->input('delivery_date');
        try {
            if ($delivery_date) {
                $orders = Orders::with('priority', 'state_order')->where('delivery_date', $delivery_date)->get();
            } else {
                $orders = Orders::with('priority', 'state_order')->get();
            }
            return response()->json($orders, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        try {
            if ($id) {
                $orders = Orders::with('inventories', 'inventories.products', 'inventories.products.provider')->find($id); 
                return response()->json($orders, 200);
            } else {
                return response()->json('no se encuentra la ruta', 404);
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }

}
