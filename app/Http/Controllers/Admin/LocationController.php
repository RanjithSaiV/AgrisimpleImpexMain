<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Location::paginate(10);
        return view('admin.location.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.location.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = Location::where(['state' => $request->state, 'city' => $request->city,'districts'=>$request->districts])->get();
        if (count($data) > 0) {
            Alert::warning('City is already stored', 'warning');
            return redirect(route('location.index'));
        }
        $location = new Location;
        $location->city = $request->city;
        $location->state ="Andra Pradesh";
        $location->status = $request->status;
        $location->districts = $request->districts;


        $location->save();
        Alert::success('City is Added', 'success');
        return redirect(route('location.index'));



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
        $location = Location::find($id);

        // Return the location details as JSON for the AJAX request
        return response()->json($location);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // //
        // $data = Location::find($id)->where(['city' => $request->city,'districts'=>$request->districts])->get();
        // if (count($data) > 0) {
        //     Alert::warning('City is already stored', 'warning');
        //     return redirect(route('location.index'));
        // }
        // $updateLocation =Location ::find($id);;
        // $updateLocation->city = $request->city;
        // $updateLocation->state = $request->state;
        // $updateLocation->status = $request->status;
        // $updateLocation->districts = $request->districts;


        // $updateLocation->save();
        // Alert::success('City is edited', 'success');
        // return redirect(route('location.index'));

          // Find the location by ID, or fail if it doesn't exist

    // dd($id);
    // $location = Location::find($id);


    // $location->city = $request->'city';
    // $location->districts = $request->'districts';
    // $location->status = $request->'status';

    // Save the updated location
    // $location->save();
    Alert::success('Location updated successfully', 'success');
    // Return a response (e.g., redirect back with success message)
    return redirect(route('location.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Location::where('id', $id)->delete();
        if ($data) {
            Alert::toast('Location Deleted SUccessfully', 'success');
            return redirect(route('location.index'));
        } else {
            Alert::toast('Unalble To Delete Location', 'warning');
            return redirect(route('location.index'));
        }
    }
}
