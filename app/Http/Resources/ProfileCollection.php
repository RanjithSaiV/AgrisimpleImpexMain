<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProfileCollection extends ResourceCollection
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
                    'profile_pic' => $data->profile_pic,
                    'profile_pic_url' => url($data->profile_pic),
                    'mobile'=>$data->mobile,
                    // 'alternate_mobile'=>$data->email,
                    'email'=>$data->email,
                    'title' => $data->title,
                    'content' => $data->content,
                    'city' =>$data->city,
                    'address'=> $data->address,
                    "created_at" => @Carbon::parse($data->created_at)->format('Y-m-d'),
                    "updated_at" => @Carbon::parse($data->updated_at)->format('Y-m-d'),
                ];
            })
        ];
    }
}
