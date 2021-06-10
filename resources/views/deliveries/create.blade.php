@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'Create delivery')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Delivery</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('deliveries.create.save') }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Distribution ID</label>
                                <input type="number" id="deliveries" class="form-control" name="distribution_id" value="{{ old('distribution_id') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Transportation ID</label>
                                <input type="number" id="deliveries" class="form-control" name="transportation_id" value="{{ old('transportation_id') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Date Distributed</label>
                                <input type="date" id="deliveries" class="form-control" name="date_distributed" value="{{ old('date_distributed') }}" required>
                            </div> 

                            
                            </div>  
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Status</label>
                                <select class="form-control" name="status" value="{{ old('status') }}" required>
                                       <option selected>choose....</option>
                                       <option>Delivered</option>
                                       <option>Returned</option>
                                    </select>
                                 </div>
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
