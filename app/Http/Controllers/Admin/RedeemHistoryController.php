<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\RedeemHistory;
use Illuminate\Http\Request;

class RedeemHistoryController extends Controller
{
    //
    public function redeemHistory(Request $request){
        $data = RedeemHistory::paginate(15);


        // dd($order_id);
        return view('admin.redeemHistory.all',compact('data'));
    }
}
