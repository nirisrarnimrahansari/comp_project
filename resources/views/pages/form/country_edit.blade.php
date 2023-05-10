@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'country'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
            <form method="post" action="{{route('country.update', [$country->id])}}"> 
                @csrf
                @method('PATCH')
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white " >{{ __('COUNTRY EDIT FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6">
                                    <label for="country">Country Name </label>
                                    <div class="input-container">
                                    <i class="fa fa-globe icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control"  name="country" value="{{$country->country}}" placeholder="Country Name">
                                    </div>
                                    @error('country')
                                             <span class="text-danger">{{$message}}</span>
                                        @enderror  
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 ml-2">
                            <button class="btn btn-primary "></i> Update</button>
                            <a class="btn btn-md fs-1 btn-light" href="/country" >Cancel</a>

                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>         
</div>
@endsection
 