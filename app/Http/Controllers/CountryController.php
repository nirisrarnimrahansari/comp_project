<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
 
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::where('deleted_date', NULL)->get();
        return view('pages.form.country')->with('country', $country);
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
            'country' => 'required|unique:countries',
           
        ]);
        $data = $request->all();
        $status = Country::create($data);
        if($status){
            request()->session()->flash('success', 'Country  Name Add Successfully !!');
        }else{
            request()->session()->flash('error', 'Country Name not Add !!');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    { 
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::where('deleted_date', NULL)->get();
        $country = Country::findOrFail($id);  
        return view('pages.form.country_edit')->with('country', $country);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $countries = Country::findOrFail($id); 
      
        $request->validate([
            'country' => 'required|unique:countries',
        ]);
        $data = $request->all(); 
        
        $status = $countries->fill($data)->save();
        if($status){
            request()->session()->flash('success', 'Country Name Updated Successfully !!');
        }else{
            request()->session()->flash('error', 'Country Name Not Updated !!');
        }
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Country::destroy($id);
        if($status){
            request()->session()->flash('success', 'Country Name Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Country Name Not Deleted !!');
        }
        return redirect()->back();
    }
}
