<?php

namespace App\Http\Controllers;
use App\Models\Measurement;
use App\Models\WorkName;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurement = Measurement::where('deleted_date', NULL)->get();
        $work_name = WorkName::where('deleted_date', NULL)->get();
        $rate = Rate::where('deleted_date', NULL)->get();
        return view('pages.Rate.rate')->with('rate', $rate)->with('measurement', $measurement)->with('work_name', $work_name);
   
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
            'name_id' => 'required',
            'price' => 'required',
            'value' => 'required',
            'measurement_id' => 'required',
            'condition' => 'required',
        ]);
        $data = $request->all(); 
        $status = Rate::create($data);
        if($status){
            request()->session()->flash('success', 'Data Store Created Successfully !!');
        }else{
            request()->session()->flash('error', 'Data Store not created !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work_name = WorkName::where('deleted_date', NULL)->get();
        $rate = Rate::where('deleted_date', NULL)->get();
        $measurement = Measurement::where('deleted_date', NULL)->get();
        $rate = Rate::findOrFail($id);  
        return view('pages.Rate.rate_edit')->with('rate', $rate)->with('measurement', $measurement)->with('work_name', $work_name);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rate = Rate::findOrFail($id); 
      
        $request->validate([
            'name_id' => 'required',
            'price' => 'required',
            'value' => 'required',
            'measurement_id' => 'required',
            'condition' => 'required',
        ]);
        $data = $request->all(); 
        
        $status = $rate->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Data Format Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Data Format Not Updated !!');
        }
        return redirect()->route('rate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Rate::destroy($id);
        if($status){
            request()->session()->flash('success', 'Data Format Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Data Format Not Deleted !!');
        }
        return redirect()->back();
    }
}