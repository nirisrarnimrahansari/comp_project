@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'state'
])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-1 col-md-10"> 
                <form  method="post" action="{{route('state.store')}}"> 
                @csrf
                    <div class="card">
                        <div class="card-header card-header-primary bg-primary">
                            <h4 class="card-title text-white" >{{ __('STATE FORM') }}</h4>
                        </div>
                        <div class="card-body ml-3 mr-3">
                            <div class="row" >
                                <div class="form-group col-md-6 ">
                                    <label for="state">State Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-building-o icon" aria-hidden="true"></i>
                                        <input type="text" class="form-control" name="state" value="{{old('state')}}" placeholder="State Name">
                                    </div> 
                                    @error('state')
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
                            <h4 class="card-title text-white text-center" >{{ __('STATE LIST') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                                    <table id="table" class="table table-striped table-no-bordered table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Id</th>
                                                <th>State</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 0  @endphp
                                            @foreach($states as $state)
                                                @php $i++; @endphp
                                                <tr>
                                                    <td> @php echo $i; @endphp</td>
                                                    <td>{{ $state->state }}</td> 
                                                    <td class="td-actions row">
                                                        <a  href="{{route('state.edit',[$state->id])}}" type="button" class="btn btn-success btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <form  method="post" action="{{route('state.destroy',[$state->id])}}"> 
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
