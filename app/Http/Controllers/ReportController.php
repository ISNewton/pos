<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\SaleResource;
use Illuminate\Database\Query\Builder;
use SebastianBergmann\CodeUnit\FunctionUnit;

class ReportController extends Controller
{
    public function sales(Request $request)
    {

        $storeMovement = DB::table('sales')
            ->select(
                DB::raw('monthname(created_at) as date'),
                DB::raw('count(*) as views')
            )
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('date')
            ->orderByDesc('date')
            ->get();

        $bestSelling = DB::table('sales')
            ->select(
                'item_name',
                DB::raw('count(*) as sales')
            )
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->limit(5)
            ->groupBy('item_name')
            ->orderByDesc('sales')
            ->get();

        $leastSelling = DB::table('sales')
            ->select(
                'item_name',
                DB::raw('count(*) as sales')
            )
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('item_name')
            ->orderBy('sales', 'asc')
            ->limit(5)
            ->get();

        $lowStock = DB::table('inventories')
            ->select(
                'barcode',
                DB::raw('sum(stock_quantity) as stock_quantity')
            )
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('barcode')
            ->orderBy('stock_quantity', 'asc')
            ->limit(5)
            ->get();

        return response([
            // 'sales' => $sales,
            'storeMovement' => $storeMovement,
            'bestSelling' => $bestSelling,
            'leastSelling' => $leastSelling,
            'lowStock' => $lowStock,
        ]);

    }

    private function checkDate($q)
    {
        return
            $q->whereBetween('created_at', [request()->from, request()->to]);

    }
    public function dashbord()
    {
        $sales = Sale::query()
        ->when(request()->has('from'),fn($q) => $this->checkDate($q))
        ->orderByDesc('id')
        ->limit(10)
        ->get();

        // $storeMovement = Sale::query()
        //     ->selectRaw('COUNT(*) as movement')
        //     ->groupBy('created_at')
        //     ->get();

        // dd($storeMovement);

        return $sales;
    }
}
