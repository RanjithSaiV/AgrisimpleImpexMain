<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LocationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
      return[
        'data' => $this->collection->map(function ($data) {
            return [
                'id' => $data->id,
                'city' => $data->city,
                "districts" => $data->districts,
                "state" => $data->state,
                "pincode" => $data->stapincodete,
                "status" => $data->status,
                "created_at" => @Carbon::parse($data->created_at)->format('Y-m-d'),
                "updated_at" => @Carbon::parse($data->updated_at)->format('Y-m-d'),
            ];

        })
      ] ;
    }
}
