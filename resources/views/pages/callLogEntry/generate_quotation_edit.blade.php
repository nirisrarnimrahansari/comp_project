@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'generate_quotation'
]) 
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
            <form method="post" action="{{route('generate-quotation.update', [$GenerateQuotation->id])}}"> 
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center mb-4" >{{ __('QUOTATION REQUEST EDIT FORM') }}</h4>
                        </div>
                        <div class="card-body col-md-12">
                            <!-- first heading section start -->
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label mt-3"  style="font-size: 16px;">
                                            @php 
                                                $checked = "";
                                                $Gen = unserialize($GenerateQuotation->work_name);
                                                if( in_array('Exterior', $Gen) ){
                                                    $checked = "checked";
                                                }
                                            @endphp
                                            <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="work_name[]"  value="Exterior" >
                                                Exterior
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 mt-3">
                                    <label for="work_type" class="fs-6">Type:</label>
                                    <select class="form-select" name="work_type[exterior]">
                                    <option style="height: 39px;" disabled selected>--Select Type--</option>
                                             @php 
                                                $selected = "";
                                                $Gen = unserialize($GenerateQuotation->work_type);
                                                if( in_array('Day View', $Gen) ){
                                                    $selected = "selected";
                                                }
                                            @endphp
                                            <option value="Day View" {{$selected}} > Day View</option>
                                            @php 
                                                $selected = "";
                                                $Gen = unserialize($GenerateQuotation->work_type);
                                                if( in_array('Night View', $Gen) ){
                                                    $selected = "selected";
                                                }
                                            @endphp
                                            <option value="Night View" {{$selected}}> Night View</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="form-check col-lg-3">
                                        <label class="checkbox-inline form-check-label">
                                        @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Front',$Gen['exterior'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="side[exterior][]"  value="Front"> 
                                        Front<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(One side corner)', $Gen['exterior'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                    <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="side[exterior][]" value="Exterior(One side corner)"  > 
                                    Exterior(One side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                     @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(Two side corner)', $Gen['exterior'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                    <input class="form-check-input fs-6" type="checkbox" {{$checked}} name="side[exterior][]" value="Exterior(Two side corner)" > 
                                    Exterior(Two side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(Three side corner)', $Gen['exterior'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                    <input class="form-check-input fs-6" type="checkbox" {{$checked}} name="side[exterior][]"  value="Exterior(Three side corner)">
                                    Exterior(Three side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        <!-- first heading section end -->
                        <!-- first drodown section start -->
                        <hr style="height:1px;color:#ffffff;background-color:#d5def2">
                        <div class="card-body col-md-12">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Interior', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                        <input class="form-check-input fs-6" {{$checked}}  type="checkbox" 
                                            name="work_name[]" value="Interior" >
                                            <!-- @php echo $GenerateQuotation->work_name == "Interior" ? "checked" : ""; @endphp > -->
                                            Interior
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('3D Floor Plan', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                            <input class="form-check-input fs-6" {{$checked}} type="checkbox" 
                                            name="work_name[]" value="3D Floor Plan"> 
                                            3D Floor Plan
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Structure', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                            <input class="form-check-input fs-6" {{$checked}} type="checkbox" 
                                            name="work_name[]" value="Structure" > 
                                            Structure
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Plannig', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                         <input class="form-check-input fs-6" {{$checked}} type="checkbox" 
                                            name="work_name[]"  value="Plannig" > 
                                            Plannig
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Walkthrough', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                        <input class="form-check-input fs-6"  {{$checked}} type="checkbox" 
                                            name="work_name[]"  value="Walkthrough"> 
                                            Walkthrough 
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr style="height:1px;border-width:0;color:#ffffff;background-color:#3b5998">

                        </div>
                        
                        <!-- first dropdown section end -->
                        <!-- second heading section start -->
                        <!-- <hr style="height:1px;border-width:0;color:#ffffff;background-color:#3b5998"> -->
                        <div class="card-body col-md-12">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label mt-3"  style="font-size: 16px;">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Interactive View(Exterior)', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                            <input  class="form-check-input fs-6" {{$checked}} type="checkbox" name="work_name[]" value="Interactive View(Exterior)" onclick="myFunction2()" > 
                                            Interactive View(Exterior) 
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 mt-3">
                                    <label for="work_type" class="fs-6">Type:</label>
                                    <select class="form-select"  name="work_type[interactive]">
                                    <option style="height: 39px;" disabled selected>--Select Type--</option>
                                            @php 
                                                $selected = "";
                                                $Gen = unserialize($GenerateQuotation->work_type);
                                                if( in_array('Day View', $Gen) ){
                                                    $selected = "selected";
                                                }
                                            @endphp
                                            <option value="Day View" {{ $selected}} > Day View</option>
                                            @php 
                                                $selected = "";
                                                $Gen = unserialize($GenerateQuotation->work_type);
                                                if( in_array('Night View', $Gen) ){
                                                    $selected = "selected";
                                                }
                                            @endphp
                                            <option value="Night View" {{ $selected}}> Night View</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Front',$Gen['interactive'] )){
                                            $checked = "checked";
                                    }
                                    @endphp
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="side[interactive][]" value="Front"> 
                                        Front <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(One side corner)', $Gen['interactive'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="side[interactive][]" value="Exterior(One side corner)" > 
                                        Exterior(One side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(Two side corner)', $Gen['interactive'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox"  name="side[interactive][]" value="Exterior(Two side corner)" > 
                                        Exterior(Two side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    @php 
                                        $checked = "";
                                        $Gen = unserialize($GenerateQuotation->side);
                                        if( in_array('Exterior(Three side corner)', $Gen['interactive'] )){
                                            $checked = "checked";
                                        }
                                    @endphp
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox"  name="side[interactive][]" value="Exterior(Three side corner)" >Exterior(Three side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <hr style="height:1px;color:#ffffff;background-color:#d5def2">
                        </div>
                        <!-- second heading section end -->
                        <!-- second dropdown data start -->  
                        <div class="card-body col-md-12">
                            <div class="row">
                                    <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Interactive View(Interior)', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                            <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="work_name[]"  value="Interactive View(Interior)" >
                                            Interactive View(Interior)
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Traditional Interior', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                            <input class="form-check-input fs-6" {{$checked}}  type="checkbox" name="work_name[]"  value="Traditional Interior" >
                                            Traditional Interior
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Bird Eye View', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp 
                                        <input class="form-check-input fs-6" {{$checked}}  type="checkbox" name="work_name[]" value="Bird Eye View" >
                                            Bird Eye View
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Working Drawings', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp 
                                        <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="work_name[]" value="Working Drawings" >
                                            Working Drawings
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        @php 
                                            $checked = "";
                                            $Gen = unserialize($GenerateQuotation->work_name);
                                            if( in_array('Other', $Gen) ){
                                                $checked = "checked";
                                            }
                                        @endphp 
                                         <input class="form-check-input fs-6" {{$checked}} type="checkbox" name="work_name[]" value="Other" >
                                            Other
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="row mt-3">
                                        <label for="upload_plan" class="form-label">Upload Plan</label>
                                        <div class="input-group">
                                            <a data-input="thumbnail-upload_plan" data-preview="preview-upload_plan" class="lfm mt-0 mr-0 btn btn-md btn-primary text-white">
                                                CHOOSE
                                            </a>
                                            <input id="thumbnail-upload_plan" class="choose_input choose_img_width" type="text" name="upload_plan"  value="{{$GenerateQuotation->upload_plan}}" readonly>
                                        </div>
                                        <div id="preview-upload_plan" style="margin-top:15px;max-height:100px;">
                                            <img src= "{{$GenerateQuotation->upload_plan}}" style="margin-top:15px;max-height:100px;" />
                                        </div>
                                           
                                        </div>
                                        <div class="row mt-5">
                                            <label for="refrence_file" class="form-label">Refrence File</label>
                                            <div class="input-group">
                                                <a data-input="thumbnail-refrence_file" data-preview="preview-refrence_file"  class="lfm mt-0 mr-0 btn btn-md btn-primary text-white">
                                                        CHOOSE
                                                </a>
                                                <input id="thumbnail-refrence_file" class="choose_input choose_img_width" type="text" name="refrence_file" value="{{$GenerateQuotation->refrence_file}}"  readonly>
                                            </div>
                                            <div id="preview-refrence_file" style="margin-top:15px;max-height:100px;">
                                                 <img src= "{{$GenerateQuotation->refrence_file}}" style="margin-top:15px;max-height:100px;" />
                                            </div>
                                              
                                            </div> 
                                        </div>
                                    </div>
                                 
                                    <div class="row">
                                    <div class="form-group col-md-3" >
                                        <label class="form-check-label mt-3"  style="font-size: 16px;">
                                            Discount
                                        </label>
                                    </div>   
                                    <div class="form-group col-md-8 mt-3">
                                            <select class="form-select" id="discount_id" name="discount_id" style="height: 39px;">
                                                <option style="height: 39px;" value="{{old('discount_id')}}" disabled selected>--Select Discount %--</option>
                                                @if($discount)
                                                @foreach ($discount as $discount)
                                                    <option value="{{$discount->id}}" {{ $discount->id == $GenerateQuotation->discount_id ? 'selected' : '' }}>{{ $discount->discount}}</option>
                                                @endforeach
                                               
                                            @endif    
                                            </select><span style= "margin:3px;">% </span>
                                    </div>
                                   
                                </div>
                                    
                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="comment">Comment</label>
                                            <textarea type="text" class="form-control" name="comment"> {{ $GenerateQuotation->comment }}</textarea>
                                        </div>    
                                                           
                                    </div>
                                  
                                    <button class="btn btn-primary btn-lg"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Update</button>
                                    <a class="btn btn-lg btn-light" href="/generate-quotation" >Cancel</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
     
@endsection
