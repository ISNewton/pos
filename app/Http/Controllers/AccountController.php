<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\GeneralInformation;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        $purchase = GeneralInformation::sum('cost');

        $sales = DB::table('sales')
            ->selectRaw('SUM(price * sold_quantity) as sales')
            ->get()
            ->first()
            ;
            $revenue = $purchase - $sales->sales;

            return response([
                'purchase' => $purchase,
                'revenue' => $revenue,
                'saels' => $sales->sales,
            ]);
    }
}
