<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Imports\InventoryImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\InventoryResource;

class InventoryController extends Controller
{

    public function import(Request $request) {
        set_time_limit(999999999999999);
        // ini_set('max_execution_time',300);
        Excel::import(new InventoryImport,$request->file);
        // ini_set('max_execution_time',120);
        set_time_limit(120);
        return response()->noContent();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inventory = Inventory::query()
        ->when($request->has('item_name'),function($q) use($request) {
            $q->where('item_name','LIKE',"%{$request->item_name}%");
        })
        ->when($request->has('barcode'),function($q) use($request) {
            $q->where('barcode',$request->barcode);
        })
        ->get();

        return InventoryResource::collection($inventory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'barcode' => 'required|string',
            'item_name' => 'required|max:256',
            'stock_quantity' => 'required|integer',
            'description' => 'nullable',
            'expiration_date' => 'date',
            'cost' => 'required|numeric',
            'category' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $inventory = Inventory::create($data);

        return InventoryResource::make($inventory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return InventoryResource::make($inventory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $data = $this->validate($request, [
            'barcode' => 'nullable|string',
            'item_name' => 'nullable|max:256',
            'stock_quantity' => 'nullable|integer',
            'description' => 'nullable',
            'expiration_date' => 'date',
            'cost' => 'nullable|numeric',
            'category' => 'nullable|numeric',
            'price' => 'nullable|numeric',
        ]);

        $data = array_filter($data);

        $inventory->update($data);

        return InventoryResource::make($inventory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return response()->noContent();
    }
}
