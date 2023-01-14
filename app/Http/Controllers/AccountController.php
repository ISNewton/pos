<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\GeneralInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        $purchase = GeneralInformation::where('user_id',Auth::id())
            ->sum('cost');

        $sales = DB::table('sales')
            ->selectRaw('SUM(price * sold_quantity) as sales')
            ->where('user_id',Auth::id())
            ->get()
            ->first()
            ;
            $revenue = $purchase - $sales->sales;

            return response([
                'purchase' => $purchase,
                'revenue' => $revenue,
                'saels' => $sales->sales ?? 0,
                'balance' => $revenue,
            ]);
    }
}
