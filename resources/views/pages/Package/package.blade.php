@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'package'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('package.store')}}"> 
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('PACKAGE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6">
                                    <label for="Plannig_package_name">Package Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="Plannig_package_name" value="{{old('Plannig_package_name')}}" placeholder="Plannig Package Name">
                                    </div> 
                                    @error('Plannig_package_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="work_name_id">Work Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                            <select class="form-control" id="work_name_id" value="{{old('work_name_id')}}" name="work_name_id" style="height: 39px;" onchange="displayDivDemo('hideValuesOnSelect', this)">
                                            <option disabled selected>--Select Work Name--</option>
                                                @foreach ($work_name as $work_name)
                                                    <option value="{{route('package', [$work_name->id])}}" {{ $work_name->id == $work_name_id ? "selected" : ""  }}>{{$work_name->work_name}}</option>
                                                @endforeach
                                            </select>
                                    </div> 
                                    @error('work_name_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                
                              
                                <div class="form-group col-md-6 ">
                                    <label for="we_provide">What you provide</label>
                                    <div class="input-container">
                                        <textarea type="text" class="form-control" name="we_provide"   placeholder="Type here what we provide"> {{ old('we_provide') }}</textarea>
                                    </div> 
                                    @error('we_provide')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="we_deliver">What we deliver</label>
                                    <div class="input-container">
                                        <textarea type="text" class="form-control" name="we_deliver" placeholder="Type here what we deliver"> {{ old('we_deliver') }}</textarea>
                                    </div>  
                                    @error('we_deliver')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                            </div>
                            <div class="col-md-12" id="hideValuesOnSelect" > 
                           @if($work_name->id == $work_name_id ? "selected" : "" ) <label for="rate_id">Rate in Units</label> @endif
                                <div class="row" >
                                 @foreach($rate as $rate)
                                 @if($rate->name_id == $work_name_id)
                                       <div class="col-sm-4">
                                            <input type="checkbox" name="rate_id[]" value="{{$rate->id}}" id="{{$rate->price}}"> <label for="{{$rate->price }}">
                                             {{$rate->price}} <i class="fa fa-inr" aria-hidden="true"></i> {{'/'}} {{$rate->condition}} {{$rate->value}} {{$rate->measurement_name_info['measurement_name']}}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach 
                                    </div>
                                @error('rate_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary ">Add</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-1 col-md-10"> 
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center" >{{ __('PACKAGE LIST') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                                <table id="table"  class="table table-striped table-no-bordered table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Id</th>
                                            <th>Work Name</th>
                                            <th>Package Name</th>
                                            <th>Rate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 0  @endphp
                                        @foreach($packages as $package)
                                            @php $i++; @endphp
                                            <tr>
                                                <td> @php echo $i; @endphp</td>
                                                <td>
                                                    @if($package->work_name_id == NULL)
                                                        Work Name not found
                                                    @else
                                                        {{ $package->work_name_info['work_name'] }}
                                                    @endif
                                                </td> 
                                                <td>{{ $package->Plannig_package_name }}</td> 
                                                
                                                <td>
                                                @if($package->rate_id == NULL)
                                                        Rate not found
                                                    @else
                                                        @php
                                                        $rates = DB::table('rates')->select('*')->whereIn('id',json_decode($package->rate_id))->where('deleted_date', NULL)->get()->toArray();
                                                        if($rates){
                                                            foreach($rates as $rate){
                                                                $work_name = DB::table('work_names')->select('work_name')->where('id',$rate->name_id)->where('deleted_date', NULL)->first();
                                                                $measurements = DB::table('measurements')->select('measurement_name')->where('id',$rate->measurement_id)->where('deleted_date', NULL)->first();
                                                                echo $work_name->work_name . " ( INR " . $rate->price . " / " . $measurements->measurement_name . ") <br/>";
                                                            }
                                                        }
                                                    @endphp
                                                @endif
                                                </td> 
                                                <td class="td-actions row">
                                                    <a  href="{{route('package.edit',[$package->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <form  method="post" action="{{route('package.destroy',[$package->id])}}"> 
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
   function displayDivDemo(id, elementValue) {
      document.getElementById(id).style.display = elementValue.value == 1 ? 'none' : 'block';
   }
</script>
<!-- <script>
    jQuery(document).on('change','#work_name_id', function () {
  id = jQuery(this).val();
  $.ajax({
      url: "{{route('getrate')}}", 
      data : {'_token' : "{{ csrf_token() }}",id: id},
    type : 'POST',
      success: function(result){
        console.log(result);
      }
  });
});
</script> -->
@endpush
