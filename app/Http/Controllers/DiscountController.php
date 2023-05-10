<?php
 
namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $discounts = Discount::where('deleted_date',Null)->get();
        return view('pages.discount.discount')->with('discounts',$discounts);
        //
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
            'discount' => 'required|unique:discounts|numeric'
        ]);
        $data = $request->all();
        $status = Discount::create($data);
        if($status){
            request()->session()->flash('success','Discount % added successfully');
        }else{
            request()->session()->flash('error', 'Discount % not added');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $discounts = Discount::where('deleted_date',NULL)->get();
        $discounts = Discount::findOrFail($id);
        return view('pages.discount.discount_edit')->with('discounts',$discounts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discounts = Discount::findOrFail($id);
        $request->validate([
            'discount' =>'required|unique:discounts|numeric',
        ]);
        $data = $request->all();
        $status = $discounts->fill($data)->save();
        if($status){
            request()->session()->flash('success','Discount % Updated');
        }else{
            request()->session()->flash('error','Discount % deleted');
        }
        return redirect()->route('discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Discount::destroy($id);
        if($status){
            request()->session()->flash('success', 'Discount % Deleted Successfully !!');
        }else{
            request()->session()->flash('error', 'Discount %  Not Deleted !!');
        }
        return redirect()->back();
    }
}
