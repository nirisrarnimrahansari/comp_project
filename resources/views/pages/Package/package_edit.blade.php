@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'package'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
            <form method="post" action="{{route('package.update', [$package->id])}}"> 
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('PACKAGE UPDATE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6">
                                    <label for="Plannig_package_name">Package Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="Plannig_package_name" value="{{$package->Plannig_package_name}}" value="{{old('Plannig_package_name')}}">
                                    </div> 
                                    @error('Plannig_package_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="work_name_id">Work Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                            <select class="form-control" id="work_name_id" name="work_name_id" style="height: 39px;">
                                            <option disabled selected>--Select Work Name--</option>
                                            @if($work_name)
                                                @foreach ($work_name as $work_name)
                                                    <option value="{{$work_name->id}}" {{ $work_name->id == $package->work_name_id ? 'selected' : '' }}>{{ $work_name->work_name }}</option>
                                                @endforeach
                                            @endif    
                                            </select>
                                    </div> 
                                    @error('work_name_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="we_provide">What you provide</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <textarea type="text" class="form-control" name="we_provide">{{$package->we_provide}}</textarea>
                                    </div> 
                                    @error('we_provide')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="we_deliver">What we deliver</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <textarea type="text" class="form-control" name="we_deliver" >{{$package->we_deliver}}</textarea>
                                    </div>  
                                    @error('we_deliver')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div> 
                            </div>
                            <div class="row" >
                                <div class="col-md-12"> 
                                    <label for="rate_id">Rate in Units</label>
                                    <div class="row" >
                                        @if($package->rate_id == NULL)
                                            @foreach($rate as $rate)
                                                <div class="col-sm-4">
                                                    <input type="checkbox" name="rate_id[]" value="{{$rate->id}}" id="{{$rate->price}}"> <label for="{{$rate->price }}">
                                             {{$rate->price}} <i class="fa fa-inr" aria-hidden="true"></i> {{'/'}} {{$rate->condition}} {{$rate->value}} {{$rate->measurement_name_info['measurement_name']}}
                                                    </label>
                                                </div>
                                            @endforeach 
                                    </div>
                                    @error('rate_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror 
                                </div>
                                @else
                                    @foreach($rate as $rate)
                                        @php 
                                            $checked = "";
                                            $packages = json_decode($package->rate_id );
                                            if( in_array($rate->id, $packages) ){
                                                $checked = "checked";
                                            }
                                        @endphp
                                        <div class="col-sm-4">
                                            <input type="checkbox" {{$checked}} name="rate_id[]" 
                                            value="{{$rate->id}}" id="{{$rate->price}}"> <label for="{{$rate->price }}">
                                             {{$rate->price}} <i class="fa fa-inr" aria-hidden="true"></i> {{'/'}} {{$rate->condition}} {{$rate->value}} {{$rate->measurement_name_info['measurement_name']}}
                                        </div>
                                    @endforeach
                                @endif
                                </div>
                                @error('rate_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror 
                            </div>
                                
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary ">Update</button>
                            <a class="btn btn-md fs-1 btn-light" href="/package" >Cancel</a>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>
@endsection