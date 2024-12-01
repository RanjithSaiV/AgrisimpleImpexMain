<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Location;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data = Branch::paginate(10);

        return view('admin.branch.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $location = Location::where('status','Show')->get();
        return view('admin.branch.add',compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          //
          $branches = new Branch();
          $branches->name = $request->name;
          $branches->petrol_price = $request->petrol_price;
          $branches->diesel_price = $request->diesel_price;
          $branches->landmark = $request->landmark;
          $branches->location_id = $request->location_id;
          $branches->status = $request->status;
          $branches->short_description = $request->short_description;
          $branches->description = $request->description;
          $branches->save();
          Alert::success('Branches is Added ','success');
          return redirect(route('branch.index'));
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
        $data = Branch::find($id);
        $locations = Location::where('status','Show')->get();
        return view('admin.branch.edit',compact('data','locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $updatebranches = Branch::find($id)->first();
        $updatebranches->name = $request->name;
        $updatebranches->petrol_price = $request->petrol_price;
        $updatebranches->diesel_price = $request->diesel_price;
        $updatebranches->landmark = $request->landmark;
        $updatebranches->status = $request->status;
        $updatebranches->short_description = $request->short_description;
        $updatebranches->description = $request->description;
        $updatebranches->save();
        Alert::success('Branch is Updated ','success');
        return redirect(route('branch.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Branch::where('id', $id)->delete();
        if ($data) {
            Alert::toast('Branch Deleted SUccessfully', 'success');
            return redirect(route('branch.index'));
        } else {
            Alert::toast('Unalble To Delete branch', 'warning');
            return redirect(route('branch.index'));
        }
    }
}
