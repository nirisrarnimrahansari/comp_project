<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $states = State::where('deleted_date', NULL)->get();
        return view('pages.form.state')->with('states', $states);
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
            'state' => 'required|unique:states',
           
        ]);
        $data = $request->all();
        $status = State::create($data);
        if($status){
            request()->session()->flash('success', 'State  Form Created Successfully !!');
        }else{
            request()->session()->flash('error', 'State Form not created !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = State::where('deleted_date', NULL)->get();
        $states = State::findOrFail($id);  
        return view('pages.form.state_edit')->with('states', $states);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $states = State::findOrFail($id); 
      
        $request->validate([
            'state' => 'required|unique:states',
        ]);
        $data = $request->all(); 
        
        $status = $states->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'State Name Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'State Name Not Updated !!');
        }
        return redirect()->route('state.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = State::destroy($id);
        if($status){
            request()->session()->flash('success', 'State Name Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'State Name Not Deleted !!');
        }
        return redirect()->back();
    }
}
