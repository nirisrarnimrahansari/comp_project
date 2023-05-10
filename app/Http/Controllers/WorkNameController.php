<?php

namespace App\Http\Controllers;

use App\Models\WorkName;
use Illuminate\Http\Request;

class WorkNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_name = WorkName::where('deleted_date', NULL)->get();
        return view('pages.Work_name.work_name')->with('work_name', $work_name);
   
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
            'work_name' => 'required',
        ]);
        $data = $request->all(); 
        $status = WorkName::create($data);
        if($status){
            request()->session()->flash('success', 'Work Name Store Created Successfully !!');
        }else{
            request()->session()->flash('error', 'Work Name Store not created !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkName  $workName
     * @return \Illuminate\Http\Response
     */
    public function show(WorkName $workName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkName  $workName
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work_name = WorkName::where('deleted_date', NULL)->get();
        $work_name = WorkName::findOrFail($id);  
        return view('pages.work_name.work_name_edit')->with('work_name', $work_name);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkName  $workName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work_name = WorkName::findOrFail($id); 
      
        $request->validate([
            'work_name' => 'required',
        ]);
        $data = $request->all(); 
        
        $status = $work_name->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Work Name Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Work Name Not Updated !!');
        }
        return redirect()->route('work-name.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkName  $workName
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = WorkName::destroy($id);
        if($status){
            request()->session()->flash('success', 'Work Name Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Work Name Not Deleted !!');
        }
        return redirect()->back();
    }
}
