<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fuel;
use App\Models\Order;
use App\Models\Reward;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data = Order::paginate(10);


        return view('admin.orders.all',compact('data'));
    }

    /**
     * Show the form for rewards
     */
    // public function rewards(Request $request)
    // {
    //     //
    //     $data = Reward::paginate(10);
    //     return view('admin.rewards.all',compact('data'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function rewards()
    {
        //
        $data = Reward::paginate(10);
        return view('admin.rewards.all',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
