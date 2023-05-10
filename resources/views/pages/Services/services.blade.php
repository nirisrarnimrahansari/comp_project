@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'service'
])
@section('content') 
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('service.store')}}"> 
                @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('SERVICE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="service_name">Services Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="service_name" value="{{old('service_name')}}" placeholder=" Name">
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
                                       @if($packages)
                                            @foreach($packages as $package)
                                                <div class="col-sm-4">
                                                    <input type="checkbox" name="package_id[]" value="{{$package->id}}" id="{{$package->Plannig_package_name}}">
                                                    <label for="{{$package->Plannig_package_name}}">{{$package->Plannig_package_name}} </label>
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
                            <h4 class="card-title text-white text-center" >{{ __('SERVICE NAME LIST') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                                    <table id="table" class="table table-striped table-no-bordered table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Service Name</th>
                                                <th>Package Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i = 0  @endphp
                                            @foreach($service as $service)
                                                @php $i++; @endphp
                                                <tr>
                                                    <td> @php echo $i; @endphp</td>
                                                    <td>{{ $service->service_name }}</td> 
                                                    <td>
                                                    @if($service->package_id == NULL)
                                                            packages not found
                                                        @else
                                                          @php
                                                            $packages = DB::table('packages')->select('*')->whereIn('id',json_decode($service->package_id))->where('deleted_date', NULL)->get()->toArray();
                                                            if($packages){
                                                                foreach($packages as $package){
                                                                    echo $package->Plannig_package_name . "<br/>";
                                                                }
                                                            }
                                                        @endphp
                                                    @endif
                                                    </td> 
                                                    <td class="td-actions row">
                                                    <a  href="{{route('service.edit',[$service->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <form  method="post" action="{{route('service.destroy',[$service->id])}}"> 
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
