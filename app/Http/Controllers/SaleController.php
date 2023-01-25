<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Resources\SaleResource;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'products' => 'array',
            'products.*.id' => 'required|exists:inventories,id',
            'products.*.quantity' => 'required|integer',
        ]);

        return DB::transaction(function () use ($request) {

            foreach ($request->products as $product) {

                $inventory = Inventory::find($product['id']);

                Sale::create([
                    'inventory_id' => $inventory->id,
                    'barcode' => $inventory->barcode,
                    'sold_quantity' => $product['quantity'],
                    'price' => $inventory->price,
                    'item_name' => $inventory->item_name,
                    'date_time' => today()->format('Y-m-d'),
                    'user_id' => Auth::id()
                ]);


                $inventory->update([
                    'stock_quantity' => $inventory->stock_quantity - $product['quantity']
                ]);
            }

            return response()->noContent(201);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return SaleResource::make($sale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        return SaleResource::make($sale);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();

        return response()->noContent();
    }
}
