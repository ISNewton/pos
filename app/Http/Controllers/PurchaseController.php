<?php

namespace App\Http\Controllers;

use Carbon\Cli\Invoker;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\GeneralInformation;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
            'id' => 'required|exists:inventories,id',
            'quantity' => 'required|integer',
            'cost' => 'required|numeric',
            'price' => 'required|numeric',
            'supplier_id' => 'nullable|exists:suppliers,id',
        ]);

        return DB::transaction(function () use ($request) {
            $products = [];

            $inventory = Inventory::find($request->id);

            $inventory->update([
                'stock_quantity' => $request->quantity,
                'cost' => $request->cost,
            ]);

            $generalInfo = GeneralInformation::where('barcode', $inventory->barcode)->first();

            if ($generalInfo?->exists()) {
                $newGeneralInfo = $generalInfo->replicate();

                $newGeneralInfo->cost = $request->cost;

                if (isset($request->supplier_id)) {
                    $newGeneralInfo->supplier_id = $request->supplier_id;
                }

                $newGeneralInfo->push();
            } else {
                GeneralInformation::create([
                    'item_name' => $inventory->item_name,
                    'price' => $inventory->price,
                    'cost' => $inventory->cost,
                    'category' => $inventory->category,
                    'supplier_id' =>  isset($request->supplier_id) ? $request->supplier_id : NULL,
                    'user_id' => Auth::id()

                ]);
            }
            // }

            return InventoryResource::make($inventory);
        });
    }
}
