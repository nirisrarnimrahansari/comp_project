<?php

namespace App\Http\Controllers;
use App\Models\Package;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::where('deleted_date', NULL)->get();
        $service = Service::where('deleted_date', NULL)->get();
        return view('pages.Services.services')->with('service', $service)->with('packages', $packages);
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
            'service_name' => 'required',
            'package_id' => 'required',
        ]);
        $data = $request->all(); 
        if(isset($data['package_id'])){
            $data['package_id'] = json_encode($data['package_id']);
        }
        $status = Service::create($data);
        if($status){
            request()->session()->flash('success', 'Service Form Created Successfully !!');
        }else{
            request()->session()->flash('error', 'Service not created !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    { 
        $packages = Package::where('deleted_date', NULL)->get();
        $service = Service::where('deleted_date', NULL)->get();
        $service = Service::findOrFail($id);  
        return view('pages.Services.services_edit')->with('service', $service)->with('packages', $packages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id); 
      
        $request->validate([
            'service_name' => 'required',
            'package_id' => 'required',
        ]);
        $data = $request->all(); 
        
        $status = $service->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Service Data Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Service Data Not Updated !!');
        }
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Service::destroy($id);
        if($status){
            request()->session()->flash('success', 'Service Data Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Service Data Not Deleted !!');
        }
        return redirect()->back();
    }
}
