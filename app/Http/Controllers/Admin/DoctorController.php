<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
                //
                $data = Doctor::paginate(15);

                return view('admin.doctor.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.doctor.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $newDoctor = new Doctor();
        $newDoctor->name = $request->name;
        $newDoctor->age = $request->age;
        $newDoctor->address = $request->address;
        $newDoctor->mobile = $request->mobile;
        $newDoctor->email = $request->email;
        $newDoctor->hospital = $request->hospital;
        $newDoctor->status = $request->status;
        $newDoctor->commision = $request->commision;
        $newDoctor->qualification = $request->qualification;
        $newDoctor->experience = $request->experience;
        // $newDoctor->description = $request->description;
        $newDoctor->save();
        Alert::success('newDoctor is Added ','success');
        return redirect(route('doctors.index'));
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
