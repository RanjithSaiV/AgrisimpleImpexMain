<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RewardHistoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'data' => $this->collection->map(function ($data) {
                return [
                    'id' => $data->id,
                    'payment_type' => $data->payment_type,
                    'paymentOrderId' => $data->paymentOrderId,
                    'invoice_id' => $data->invoice_id,
                    'payment_id' => $data->payment_id,
                    'reference_id' => $data->reference_id,
                    'fuel_id' => $data->fuel_id,
                    'branch_id' => $data->branch_id,
                    'quantity' => $data->quantity,
                    'order_amount' => $data->order_amount,
                    'earned_points'=> $data->earned_points,

                // $user->points = $user->points - $request->redeem_points;

                    "created_at" => @Carbon::parse($data->created_at)->format('Y-m-d'),
                    "updated_at" => @Carbon::parse($data->updated_at)->format('Y-m-d'),
                ];
            })
        ];
    }
}
