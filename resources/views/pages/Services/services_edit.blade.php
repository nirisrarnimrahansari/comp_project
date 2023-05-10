@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'service'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
            <form method="post" action="{{route('service.update', [$service->id])}}"> 
                @csrf
                @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('SERVICE UPDATE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="service_name">Services Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="service_name" value="{{$service->service_name}}" >
                                    </div> 
                                    @error('service_name')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                <label for="package_id">Package Name</label>
                                    <div class="row" >
                                    @if($service->package_id == NULL)
                                        @foreach($packages as $package)
                                            <div class="col-sm-4">
                                                <input type="checkbox" name="package_id[]" value="{{$package->id}}" id="{{$package->Plannig_package_name}}">
                                                 <label for="{{$package->Plannig_package_name}}">{{$package->Plannig_package_name}} </label>
                                            </div>
                                        @endforeach
                                    @else
                                        @foreach($packages as $package)
                                            @php 
                                                $checked = "";
                                                $services = json_decode($service->package_id);
                                                if( in_array($package->id, $services) ){
                                                    $checked = "checked";
                                                }
                                            @endphp
                                            <div class="col-sm-4">
                                                <input type="checkbox" {{$checked}} name="package_id[]" 
                                                value="{{$package->id}}" id="{{$package->Plannig_package_name}}"> <label for="{{$package->Plannig_package_name}}">{{$package->Plannig_package_name}} </label>
                                            </div>
                                        @endforeach
                                    @endif

                                    </div>
                                @error('package_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror 
                            </div>
                        </div>
                        </div>
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary ">Update</button>
                            <a class="btn btn-md fs-1 btn-light" href="/service" >Cancel</a>
                        </div>
                    </div>
                </form>    
            </div>
        </div> 
    </div>
</div>
@endsection
