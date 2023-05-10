@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'rate'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('rate.store')}}"> 
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('RATE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="name_id">Work Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <select class="form-control" id="name_id" name="name_id" style="height: 39px;">
                                          <option style="height: 39px;" disabled selected>--Select Work Name--</option>
                                          @if($work_name)
                                                @foreach($work_name as $work_name)
                                                    <option value="{{$work_name->id}}">{{$work_name->work_name}}</option>
                                                @endforeach 
                                          @endif      
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
                                        <input type="text" class="form-control" name="price" value="{{old('price')}}" placeholder="price">
                                    </div> 
                                    @error('price')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror 
                                </div>
                            </div>
                            <div class="row" >
                                <div class="form-group col-md-6">
                                    <label for="measurement_id"> Measurement Unit</label>
                                    <div class="input-container">
                                         <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <select class="form-control" id="measurement_id" name="measurement_id" style="height: 39px;">
                                          <option style="height: 39px;" disabled selected>--Select Measurement Name--</option>
                                          @if($measurement)
                                                @foreach($measurement as $measurement)
                                                    <option value="{{$measurement->id}}">{{$measurement->measurement_name}}</option>
                                                @endforeach 
                                          @endif      
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
                                            <option value="=">=</option>
                                            <option value="<="><=</option>
                                            <option value=">=">>=</option>
                                            <option value="<"><</option>
                                            <option value=">">></option>
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
                                        <input type="text" class="form-control" name="value" value="{{old('value')}}" placeholder="value">
                                    </div> 
                                        @error('value')
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
                            <h4 class="card-title text-white text-center" >{{ __('RATE LIST') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                                    <table id="table" class="table table-striped table-no-bordered table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>Work Name</th>
                                                <th>Price</th>
                                                <th>Measurement Unit</th>
                                                <th>Conditions</th>
                                                <th>Value</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0  @endphp
                                            @foreach($rate as $rate)
                                                @php $i++; @endphp
                                                <tr>
                                                    <td> @php echo $i; @endphp</td>
                                                    <td> 
                                                        @if($rate->name_id == NULL)
                                                            Work Name not found
                                                        @else
                                                            {{ $rate->work_name_info['work_name'] }}
                                                        @endif
                                                    </td> 
                                                    <td><i class="fa fa-inr" aria-hidden="true"></i> {{ $rate->price }}</td> 
                                                    <td>
                                                        @if($rate->measurement_id == NULL)
                                                            measurement Unit not found
                                                        @else
                                                        {{ $rate->measurement_name_info['measurement_name'] }}
                                                        @endif
                                                    </td> 
                                                    <td>{{ $rate->condition }}</td> 
                                                    <td>
                                                        @if($rate->value == NULL)
                                                        value not found
                                                        @else
                                                        {{ $rate->value }}
                                                        @endif
                                                    </td> 
                                                    <td class="td-actions row">
                                                    <a  href="{{route('rate.edit',[$rate->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <form  method="post" action="{{route('rate.destroy',[$rate->id])}}"> 
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
