<?php

namespace App\Http\Controllers; 

use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurement = Measurement::where('deleted_date', NULL)->get();
        return view('pages.Measurement.measurement')->with('measurement', $measurement);
   
    }
 
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'measurement_name' => 'required|unique:measurements',
            'measurement_short_name' => 'required|unique:measurements',
           
        ]);
        $data = $request->all();
        $status = Measurement::create($data);
        if($status){
            request()->session()->flash('success', 'Measurements Name Created Successfully !!');
        }else{
            request()->session()->flash('error','Measurements Name not created !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(Measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $measurement = Measurement::where('deleted_date', NULL)->get();
        $measurement = Measurement::findOrFail($id);  
        return view('pages.Measurement.measurement_edit')->with('measurement', $measurement);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $measurement = Measurement::findOrFail($id); 
      
        $request->validate([
            'measurement_name' => 'required|unique:measurements',
            'measurement_short_name' => 'required|unique:measurements',
        ]);
        $data = $request->all(); 
        
        $status = $measurement->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Measurement Name Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Measurement Name Not Updated !!');
        }
        return redirect()->route('measurement.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Measurement::destroy($id);
        if($status){
            request()->session()->flash('success', 'Measurement Name Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Measurement Name Not Deleted !!');
        }
        return redirect()->back();
    }
}