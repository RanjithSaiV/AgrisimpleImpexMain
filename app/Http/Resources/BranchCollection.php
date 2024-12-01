<?php

namespace App\Http\Resources;
use App\Models\Branch;
use App\Models\Fuel;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BranchCollection extends ResourceCollection
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
                    "landmark" => $data->landmark,
                    "pincode" => $data->pincode,
                    "city" => $data->city,
                    "district" => $data->district,
                    "state" => $data->state,
                    "location_id" => $data->location_id,
                    'short_description'=>$data->short_description,
                    'description'=>$data->description,
                    "status" => $data->status,
                    "created_at" => @Carbon::parse($data->created_at)->format('Y-m-d'),
                    "updated_at" => @Carbon::parse($data->updated_at)->format('Y-m-d'),
                    'fuel' => $this->branchFuel($data->id),
                    'location' => $this->branchlocation($data->location_id),
                ];

            })
        ];
    }


    public function branchFuel($id)
    {
        $data = new FuelCollection(Fuel::where('branch_id', $id)->get());
        return $data;

    }
    public function branchlocation($location_id)
    {
        $data = new LocationCollection(Location::where('id', $location_id)->get());
        return $data;

    }


}
