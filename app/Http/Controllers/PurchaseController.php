<?php

namespace App\Http\Controllers;

use Carbon\Cli\Invoker;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\GeneralInformation;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\InventoryResource;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase(Request $request)
    {
        $this->validate($request, [
            'products' => 'array',
            'products.*.id' => 'required|exists:inventories,id',
            'products.*.quantity' => 'required|integer',
            'products.*.cost' => 'required|numeric',
            'products.*.price' => 'required|numeric',
            'products.*.price' => 'required|numeric',
            'products.*.price' => 'required|numeric',
            'products.*.supplier_id' => 'nullalbe|exists:suppliers,id',
            // '*.*.item_name' => 'required|numeric',
        ]);

        return DB::transaction(function () use($request) {
            $products = [];
            foreach ($request->products as $product) {

                $inventory = Inventory::find($product['id']);

               $inventory->update([
                    'stock_quantity' => $product['quantity'],
                    'cost' => $product['cost'],
                ]);

                $products[] = $inventory;

                $generalInfo = GeneralInformation::where('barcode', $inventory->barcode)->first();

                if ($generalInfo->exists()) {
                    $newGeneralInfo = $generalInfo->replicate();

                    $newGeneralInfo->cost = $product['cost'];

                    if(isset($product['supplier_id'])) {
                    $newGeneralInfo->supplier_id = $product['supplier_id'];
                    }

                    $newGeneralInfo->push();

                } else {
                    GeneralInformation::create([
                        'item_name' => $inventory->item_name,
                        'price' => $inventory->price,
                        'cost' => $inventory->cost,
                        'category' => $inventory->category,
                        'supplier_id' =>  isset($product['supplier_id']) ? $product['supplier_id'] : NULL,
                    ]);
                }
            }

            return InventoryResource::collection($products);
        });
    }
}
