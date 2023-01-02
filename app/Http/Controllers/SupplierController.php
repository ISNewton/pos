<?php

namespace App\Http\Controllers;

use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return SupplierResource::collection($suppliers);
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
            'name' => 'required|max:256',
            'phone' => 'required|integer',
        ]);

        $supplier = Supplier::create($data);

        return SupplierResource::make($supplier);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $supplier->load(['invoices' => function($q) {
            $q->when(request()->has('from'),function($q) {
                $q->whereBetween('created_at',[request()->from,request()->to]);
            });
        }]);

        return SupplierResource::make($supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data = $this->validate($request, [
            'name' => 'required|max:256',
            'phone' => 'required|integer',
        ]);

        $supplier->update($data);

        return SupplierResource::make($supplier);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return response()->noContent();
    }
}
