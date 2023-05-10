@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'prospect'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form method="post" action="{{route('prospect.update', [$prospect->id])}}"> 
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white text-center" >{{ __('PROSPECT UPDATE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="name">Proprietor Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input type="text" value="{{$prospect->name}}"  class="form-control" id="name" name="name">
                                    </div>
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="organization">Organization</label>
                                    <div class="input-container">
                                        <i class="fa fa-sitemap icon" ></i>
                                        <input type="text" value="{{$prospect->organization}}"  class="form-control" id="organization" name="organization">
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
                                        <input type="text" value="{{$prospect->address}}"  class="form-control" id="address" name="address">
                                    </div>
                                        @error('address')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" value="{{$prospect->city}}"  class="form-control" id="city" name="city">
                                    </div>
                                        @error('city')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
  
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="cell">Cell</label>
                                    <div class="input-container">
                                        <i class="fa fa-mobile icon" aria-hidden="true"></i>
                                        <input type="text" value="{{$prospect->cell}}"  class="form-control" id="cell" name="cell">
                                    </div>
                                        @error('cell')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <div class="input-container">
                                        <i class="fa fa-phone icon" aria-hidden="true"></i>
                                        <input type="text" value="{{$prospect->phone}}"  class="form-control" id="phone" name="phone">
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
                                        <input type="text" value="{{$prospect->whatsapp_no}}"  class="form-control" id="whatsapp_no" name="whatsapp_no">
                                    </div>
                                        @error('whatsapp_no')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email_id">Email ID</label>
                                    <div class="input-container">
                                        <i class="fa fa-envelope icon" aria-hidden="true"></i>
                                        <input type="text" value="{{$prospect->email_id}}"  class="form-control" id="email_id" name="email_id">
                                    </div>
                                    @error('email_id')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 ml-2 text-center">
                            <button type="submit"  name="submit"  class="btn  submit-btn btn-primary">Update</button>
                            <a class="btn btn-md fs-1 btn-light" href="/prospect" >Cancel</a>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection