@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'prospect'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('prospect.store')}}"> 
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center" >{{ __('PROSPECT FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="name">Proprietor Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Proprietor Name">
                                    </div>
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="organization">Organization</label>
                                    <div class="input-container">
                                        <i class="fa fa-sitemap icon" ></i>
                                        <input type="text" class="form-control"  name="organization" value="{{old('organization')}}"  placeholder="organization">
                                    </div>
                                        @error('organization')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <div class="input-container">
                                        <i class="fa fa-address-card icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control"  name="address" value="{{old('address')}}"  placeholder="Address">
                                    </div>
                                        @error('address')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="city" value="{{old('city')}}"  placeholder="City">
                                    </div>
                                        @error('city')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="state_id">State</label>
                                    <div class="input-container">
                                         <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <select class="form-control" id="state_id" name="state_id" style="height: 39px;">
                                          <option style="height: 39px;" value="{{old('state_id')}}" disabled selected>--Select State Name--</option>
                                        @if($states) 
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->state}}</option>
                                            @endforeach 
                                        @else
                                           @php echo('no data'); @endphp
                                        @endif
                                       </select>
                                    </div>
                                       @error('state_id')
                                       <span class="text-danger">{{$message}}</span>
                                       @enderror 

                                </div>
                                <div class="form-group col-md-6" >
                                    <label for="country_id">country</label>
                                    <div class="input-container">
                                         <i class="fa fa-globe icon" aria-hidden="true"></i>
                                         <select class="form-control" id="country_id" name="country_id" style="height: 39px;">
                                          <option style="height: 39px;" value="{{old('country_id')}}" disabled selected>--Select Country Name--</option>
                                        @if($countries) 
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->country}}</option>
                                            @endforeach
                                        @endif

                                       </select>
                                    </div>
                                       @error('country_id')
                                       <span class="text-danger">{{$message}}</span>
                                       @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="cell">Cell</label>
                                    <div class="input-container">
                                        <i class="fa fa-mobile icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="cell" value="{{old('cell')}}"  placeholder="Cell">
                                    </div>
                                        @error('cell')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <div class="input-container">
                                        <i class="fa fa-phone icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}"  placeholder="Phone">
                                    </div>
                                        @error('phone')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>                                                                      
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="whatsapp_no">Whats App no</label>
                                    <div class="input-container">
                                        <i class="fa fa-whatsapp icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="whatsapp_no" value="{{old('whatsapp_no')}}"  placeholder="Whatsapp Number">
                                    </div>
                                        @error('whatsapp_no')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email_id">Email ID</label>
                                    <div class="input-container">
                                        <i class="fa fa-envelope icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="email_id" value="{{old('email_id')}}"  placeholder="Email ID">
                                    </div>
                                    @error('email_id')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                            <div class="form-group col-md-12 ml-2 text-center">
                                <button class="btn btn-primary submit-btn"><i class="fa fa-sign-in"></i> Submit</button>
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
                                <h4 class="card-title text-white text-center" >{{ __('PROSPECT LIST') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive"> 
                                        <table id="table" class="table table-striped table-no-bordered table-hover">
                                            <thead  class="text-primary">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Organization</th>
                                                    <th>Phone Number</th>
                                                    <th>Email-ID</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 0  @endphp
                                                @foreach($prospects as $prospect)
                                                    @php $i++; @endphp
                                                    <tr>
                                                        <td> @php echo $i; @endphp</td>
                                                        <td>{{ $prospect->name }}</td> 
                                                        <td>{{ $prospect->organization }}</td> 
                                                        <td>{{ $prospect->phone }}</td> 
                                                        <td>{{ $prospect->email_id }}</td> 
                                                        <td class="td-actions row">
                                                            <a  href="{{route('prospect.edit',[$prospect->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                            <form  method="post" action="{{route('prospect.destroy',[$prospect->id])}}"> 
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