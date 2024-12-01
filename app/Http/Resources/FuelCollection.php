<?php

namespace App\Http\Resources;
use App\Models\Fuel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FuelCollection extends ResourceCollection
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
                    'name' => $data->name,
                    "branch_id" => $data->branch_id,
                    "image" => $data->image,
                    "image_url" => isset($data->image) ? url($data->image) : null,
                    "slug" => $data->slug,
                    "price" => $data->price,
                    "density" => $data->density,
                    "status" => $data->status,
                    "created_at" => @Carbon::parse($data->created_at)->format('Y-m-d'),
                    "updated_at" => @Carbon::parse($data->updated_at)->format('Y-m-d'),
                ];

            })
        ];
    }
}
