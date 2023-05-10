@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'generate_quotation'
])
@section('content')
<!-- `id`, `work_name`, `work_type`, `side`, `upload_plan`, `refrence_file`, `discount_id`, `comment`, -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('generate-quotation.store')}}"> 
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center mb-4" >{{ __('QUOTATION REQUEST FORM') }}</h4>
                        </div>
                        <div class="card-body col-md-12">
                            <!-- first heading section start -->
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label mt-3"  style="font-size: 16px;">
                                        <input  class="form-check-input fs-6" type="checkbox" id="myCheck" name="work_name[]"   value="Exterior" onclick="myFunction()">
                                            Exterior
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 mt-3">
                                    <label for="work_type" class="fs-6">Type:</label>
                                    <select class="form-select" name="work_type[exterior][]">
                                        <option style="height: 39px;" disabled selected>--Select Type--</option>
                                        <option value="Day View">Day View</option>
                                        <option value="Night View">Night View</option>
                                    </select>
                                </div>
                            </div>
                            <div id="text" style="display:none" class="row">
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                        <input class="form-check-input fs-6" type="checkbox" name="side[exterior][]"  value="Front">Front<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    <input class="form-check-input fs-6" type="checkbox" name="side[exterior][]"  value="Exterior(One side corner)">Exterior(One side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    <input class="form-check-input fs-6" type="checkbox" name="side[exterior][]"  value="Exterior(Two side corner)">Exterior(Two side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                    <input class="form-check-input fs-6" type="checkbox" name="side[exterior][]"  value="Exterior(Three side corner)">Exterior(Three side corner)<span class="form-check-sign">
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
                                            <input class="form-check-input fs-6" type="checkbox" 
                                            name="work_name[]"  value="Interior">
                                            Interior
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" 
                                            name="work_name[]"  value="3D Floor Plan">
                                            3D Floor Plan
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" 
                                            name="work_name[]"  value="Structure">
                                            Structure
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" 
                                            name="work_name[]" value="Plannig">
                                            Plannig
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" 
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
                                            <input  class="form-check-input fs-6" type="checkbox" id="myCheck2" name="work_name[]" value="Interactive View(Exterior)" onclick="myFunction2()">
                                            Interactive View(Exterior) 
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 mt-3">
                                    <label for="work_type" class="fs-6">Type:</label>
                                    <select class="form-select"  name="work_type[interactive][]">
                                        <option style="height: 39px;" disabled selected>--Select Type--</option>
                                        <option value="Day View">Day View</option>
                                        <option value="Night View">Night View</option>
                                    </select>
                                </div>
                            </div>
                            <div id="text2" style="display:none" class="row">
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                        <input class="form-check-input fs-6" type="checkbox" name="side[interactive][]"  value="Front">Front <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                        <input class="form-check-input fs-6" type="checkbox" name="side[interactive][]"  value="Exterior(One side corner)">Exterior(One side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                        <input class="form-check-input fs-6" type="checkbox"  name="side[interactive][]"  value="Exterior(Two side corner)" >Exterior(Two side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check col-lg-3">
                                    <label class="checkbox-inline form-check-label">
                                        <input class="form-check-input fs-6" type="checkbox"  name="side[interactive][]"  value="Exterior(Two side corner)" >Exterior(Three side corner)<span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <hr style="height:1px;color:#ffffff;background-color:#d5def2">
                        </div>
                        <!-- second heading section end -->
                        <!-- second dropdown data start -->
                        <!-- <hr style="height:1px;border-width:0;color:#ffffff;background-color:#d5def2"> -->
                        <div class="card-body col-md-12">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" name="work_name[]"  value="Interactive View(Interior)" >
                                            Interactive View(Interior)
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" name="work_name[]"  value="Traditional Interior" >
                                            Traditional Interior
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" name="work_name[]"  value="Bird Eye View" >
                                            Bird Eye View
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" name="work_name[]"  value="Working Drawings" >
                                            Working Drawings
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input fs-6" type="checkbox" name="work_name[]"  value="Other" >
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
                                            <input id="thumbnail-upload_plan" class="choose_input choose_img_width" value="{{old('upload_plan')}}" type="text" name="upload_plan" readonly>
                                        </div>
                                        <div id="preview-upload_plan" style="margin-top:15px;max-height:100px;"></div>
                                           
                                        </div>
                                        <div class="row mt-3">
                                            <label for="refrence_file" class="form-label">Refrence File</label>
                                            <div class="input-group">
                                                <a data-input="thumbnail-refrence_file" data-preview="preview-refrence_file"  class="lfm mt-0 mr-0 btn btn-md btn-primary text-white">
                                                        CHOOSE
                                                </a>
                                                <input id="thumbnail-refrence_file" class="choose_input choose_img_width" type="text" value="{{old('refrence_file')}}" name="refrence_file" readonly>
                                            </div>
                                            <div id="preview-refrence_file" style="margin-top:15px;max-height:100px;"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="form-group col-md-3" >
                                        <label class="form-check-label mt-3" style="font-size: 16px;">
                                            Discount
                                        </label>
                                    </div>  
                                    <div class="form-group col-md-8 mt-3">
                                            <select class="form-select" id="discount_id" name="discount_id" style="height: 39px;">
                                                <option style="height: 39px;" value="" disabled selected>--Select Discount %--</option>
                                                    @if($discount) 
                                                        @foreach($discount as $discount)
                                                            <option value="{{$discount->id}}" {{old('discount_id') == $discount->discount ? 'selected': ""}}>{{$discount->discount}}</option>
                                                        @endforeach
                                                    @endif
                                            </select><span style= "margin:3px;">% </span>
                                    </div>
                                    
                                </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="comment">Comment</label>
                                            <textarea type="text" class="form-control" name="comment" id="comment" placeholder="Enter comment"> {{ old('comment') }}</textarea>
                                        </div>    
                                                          
                                    </div>
                                    <button class="btn btn-primary btn-lg">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-10"> 
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center" >{{ __('QUOTATION REQUEST LIST') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                                    <table id="table" class="table table-striped table-no-bordered table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Exterior Name</th>
                                                <th>Interacive View(Exterior) Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0  @endphp
                                            @foreach($GenerateQuotation as $GenerateQuotation)
                                                @php $i++; @endphp
                                                <tr>
                                                    <td> @php echo $i; @endphp</td>
                                                    <td>
                                                        @if($GenerateQuotation->work_name == NULL)
                                                            Exterior Name not found
                                                        @else
                                                            {{ implode(', ',unserialize($GenerateQuotation->work_name) ) }}
                                                        @endif
                                                    <td>  
                                                    @if($GenerateQuotation->work_type == NULL)
                                                        Interacive View(Exterior) Name not found
                                                    @else
                                                        @php
                                                            $work_array = unserialize($GenerateQuotation->work_type);
                                                            if(is_array($work_array)){
                                                                function array2str($array, $str ){
                                                                    if(is_array($array)) {
                                                                        foreach($array as $key => $v) {
                                                                            if(is_array($v)) {
                                                                                $str .= $key . " - " . implode( ",",$v) . "<br/>";
                                                                            }else{
                                                                                $str .= $key . " - " . $v . "<br/>";
                                                                            }
                                                                        }
                                                                    }
                                                                    return $str;
                                                                }
                                                                $str = '';
                                                                echo array2str( $work_array, $str );
                                                                
                                                            }
                                                        @endphp 
                                                    @endif

                                                     </td>
                                                    <td class="td-actions row">
                                                    <a  href="{{route('generate-quotation.edit',[$GenerateQuotation->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <form  method="post" action="{{route('generate-quotation.destroy',[$GenerateQuotation->id])}}"> 
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </form> 
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function myFunction2() {
  var checkBox = document.getElementById("myCheck2");
  var text = document.getElementById("text2");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

jQuery('.lfm').filemanager('image', {prefix:'{{route("unisharp.lfm.show")}}'});
</script>
@endpush
                                                        