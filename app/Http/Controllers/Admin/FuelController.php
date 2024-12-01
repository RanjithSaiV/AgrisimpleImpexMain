<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Fuel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $id= $request->id;
        $branch=Branch::find(id: $request->id);
        if ($branch)
        {
            $data = Fuel::where('branch_id',$request->id)->paginate(5);
            // dd($data);
            return view('admin.fuels.all',compact('data','id'));

        }
        else{
            Alert::toast('Branch Not Found',icon: 'waarning');
            return redirect(route('branch.index'));
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $branch=Branch::find(id: $request->id);
        if ($branch)
        {

            // dd($data);
            return view('admin.fuels.add',compact('branch'));

        }
        else{
            Alert::toast('Branch Not Found',icon: 'waarning');
            return redirect(route('branch.index'));
        }
        // return view('admin.fuels.add',compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $fuel = new Fuel();
       $fuel->name = $request->name;
       if($request->hasFile('image'))
       {
           $fuel->image = $request->image->store('fuel');
       }
      
       $fuel->price = $request->price;
       $fuel->branch_id = $request->branch_id;
       $fuel->status = $request->status;
       $fuel->save();
        Alert::success(' Fuel is Added ','success');
        return redirect(route('fuels.index',['id' =>$fuel->branch_id]));
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
        $data = Fuel::find($id);
        $branch=Branch::find($data->branch_id);

        return view('admin.fuels.edit',compact('data','branch'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $updateFuel = Fuel::find($id)->first();
        $updateFuel->name = $request->name;

        if($request->hasFile('image'))
        {
            $updateFuel->image = $request->image->store('fuel');
        }
        $updateFuel->price = $request->price;
        $updateFuel->branch_id = $request->branch_id;
        $updateFuel->status = $request->status;
        $updateFuel->save();
        Alert::success('Fuel Data is Updated ','success');
        return redirect(route('fuels.index',['id' => $id]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
