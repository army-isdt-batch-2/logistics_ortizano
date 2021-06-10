@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'Create Return')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Return</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('return.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="return" class="form-label">Asset ID</label>
                                <input type="number" id="return" class="form-control" name="asset_id" required value="{{ $data->asset_id }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned By</label>
                                <input type="text" id="return" class="form-control" name="returned_by" required value="{{ $data->returned_by }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by Contact</label>                           
                                <input type="text" id="return" class="form-control" name="returned_by_contact" required value="{{ $data->returned_by_contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Quantity</label>
                                <input type="number" id="return" class="form-control" name="quantity" required value="{{ $data->quantity }}">
                            </div> 
                
                            
                            
                            
                            
                        
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> 
                            
                        </form> 
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection