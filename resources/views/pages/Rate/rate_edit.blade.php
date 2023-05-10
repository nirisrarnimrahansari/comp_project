@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'rate'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
            <form method="post" action="{{route('rate.update', [$rate->id])}}"> 
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('RATE EDIT FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="name_id">Work Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <select class="form-control" id="name_id" name="name_id" style="height: 39px;">
                                          <option style="height: 39px;" disabled selected>--Select Work Name--</option>
                                          @foreach($work_name as $work_name)
                                          <option value="{{ $work_name->id}}" {{ $work_name->id == $rate->name_id ? 'selected' : '' }}>{{ $work_name->work_name }}</option>
                                          @endforeach 
                                       </select>
                                    </div> 
                                    @error('name_id')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="price">Price</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="price"  value="{{$rate->price}}"  placeholder="price">
                                    </div> 
                                    @error('price')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                            </div>
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="measurement_id"> Measurement Unit</label>
                                    <div class="input-container">
                                         <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                         <select class="form-control" id="measurement_id" name="measurement_id" style="height: 39px;">
                                          <option style="height: 39px;" disabled selected>--Select Measurement Name--</option>
                                                @foreach($measurement as $measurement)
                                                   <option value="{{ $measurement->id}}" {{ $measurement->id == $rate->measurement_id ? 'selected' : '' }}>{{ $measurement->measurement_name }}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    @error('measurement_id')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="condition">Conditions</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <select class="form-control" id="condition" name="condition" style="height: 39px;">
                                          <option style="height: 39px;" disabled selected>--Select Condition--</option>
                                            <option value="=" @php echo $rate->condition == "=" ? "selected" : ""; @endphp>=</option>
                                            <option value="<=" @php echo $rate->condition == "<=" ? "selected" : ""; @endphp> <= </option>
                                            <option value=">=" @php echo $rate->condition == ">=" ? "selected" : ""; @endphp> >= </option>
                                            <option value="<" @php echo $rate->condition == "<" ? "selected" : ""; @endphp> < </option>
                                            <option value=">" @php echo $rate->condition == ">" ? "selected" : ""; @endphp> > </option>
                                        </select> 
                                    </div> 
                                    @error('condition')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                            </div>
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="value">Value</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="value"  value="{{$rate->value}}"  placeholder="value">
                                    </div> 
                                    @error('value')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary ">UPDATE</button>
                            <a class="btn btn-md fs-1 btn-light" href="/rate" >Cancel</a>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>
@endsection
