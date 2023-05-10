<?php

namespace App\Http\Controllers;

use App\Models\GenerateQuotation;
use App\Models\Discount;
use Illuminate\Http\Request;

class GenerateQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GenerateQuotation = GenerateQuotation::where('deleted_date', NULL)->get();
        $discount = Discount::where('deleted_date', NULL)->get();
        return view('pages.callLogEntry.generate_quotation')->with('GenerateQuotation', $GenerateQuotation)->with('discount', $discount);
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
            'work_type' => 'required',
            'side' => 'required',
            'upload_plan' => 'required',
            'refrence_file' => 'required',
            'discount_id' => 'required',
            'comment' => 'required',
        ]);
        $data = $request->all();

        if(isset($data['work_name'])){
            $data['work_name'] = serialize($data['work_name']);
        }
        if(isset($data['work_type'])){
            $data['work_type'] = serialize($data['work_type']);
        }
        if(isset($data['side'])){
            $data['side'] = serialize($data['side']);
        }
        $status = GenerateQuotation::create($data);
        if($status){
            request()->session()->flash('success', 'Generate Quotation  Name Add Successfully !!');
        }else{
            request()->session()->flash('error', 'Generate Quotation Name not Add !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenerateQuotation  $generateQuotation
     * @return \Illuminate\Http\Response
     */
    public function show(GenerateQuotation $generateQuotation)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenerateQuotation  $generateQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $GenerateQuotation = GenerateQuotation::where('deleted_date', NULL)->get();
        $discount = Discount::where('deleted_date', NULL)->get();
        $GenerateQuotation = GenerateQuotation::findOrFail($id);  
        return view('pages.callLogEntry.generate_quotation_edit')->with('GenerateQuotation', $GenerateQuotation)->with('discount', $discount);  
    }
    //     print_r('<pre>');
    //     // print_r($GenerateQuotation);
    //     // die();
    //     print_r(json_decode($GenerateQuotation->work_name));
    //     print_r(json_decode($GenerateQuotation->work_type));
    //     $side = json_decode($GenerateQuotation->side);
    // //    print_r(implode('', $side));
        // print_r('<pre>');
        // print_r($GenerateQuotation);

     //

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenerateQuotation  $generateQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $GenerateQuotation = GenerateQuotation::findOrFail($id); 
      
        $request->validate([
        
           
        ]);
        $data = $request->all(); 
       
        if(isset($data['work_name'])){
            $data['work_name'] = serialize($data['work_name']);
        }
        if(isset($data['work_type'])){
            $data['work_type'] = serialize($data['work_type']);
        }
        if(isset($data['side'])){
            $data['side'] = serialize($data['side']);
        }
       
        $status = $GenerateQuotation->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Generate Quotation Name Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Generate Quotation Name Not Updated !!');
        }
        return redirect()->route('generate-quotation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenerateQuotation  $generateQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = GenerateQuotation::destroy($id);
        if($status){
            request()->session()->flash('success', 'Quotation Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Quotation Not Deleted !!');
        }
        return redirect()->back();
    }
}
