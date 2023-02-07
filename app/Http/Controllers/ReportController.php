<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\SaleResource;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
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
            ->where('user_id',Auth::id())
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('date')
            ->orderByDesc('date')
            ->get();

        $bestSelling = DB::table('sales')
            ->select(
                'item_name',
                DB::raw('count(*) as sales')
            )
            ->where('user_id',Auth::id())
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
            ->where('user_id',Auth::id())
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('item_name')
            ->orderBy('sales', 'asc')
            ->limit(5)
            ->get();

        $lowStock = DB::table('inventories')
            ->select(
                'item_name',
                DB::raw('sum(stock_quantity) as stock_quantity')
            )
            ->where('user_id',Auth::id())
            ->when(request()->has('from'),fn($q) => $this->checkDate($q))
            ->groupBy('item_name')
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
    public function salesReport()
    {
        $sales = Sale::query()
        ->where('user_id',Auth::id())
        ->when(request()->has('from'),fn($q) => $this->checkDate($q))
        ->orderByDesc('id')
        ->limit(10)
        ->get();

        return SaleResource::collection($sales);
    }
}
