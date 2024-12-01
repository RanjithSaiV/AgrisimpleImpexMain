<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use RealRashid\SweetAlert\Facades\Alert;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Patient::paginate(15);


        // dd($order_id);
        return view('admin.patient.all',compact('data'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.patient.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->address = $request->address;
        $patient->doctor = $request->doctor;
        $patient->hospital = $request->hospital;
        $patient->status = $request->status;
        $patient->amount = $request->amount;
        $patient->test_name = $request->test_name;
        // $patient->description = $request->description;
        $patient->save();
        Alert::success('patient is Added ','success');
        return redirect(route('patients.index'));
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
