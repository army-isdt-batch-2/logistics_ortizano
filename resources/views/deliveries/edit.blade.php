@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'Create Delivery')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Delivery</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('deliveries.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Distribution ID</label>
                                <input type="number" id="deliveries" class="form-control" name="distribution_id" required value="{{ $data->distribution_id }}">
                            </div> 


                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Transportation ID</label>
                                <input type="number" id="deliveries" class="form-control" name="transportation_id" required value="{{ $data->transportation_id }}">
                            </div> 

                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Date Distributed</label>
                                <input type="date" id="deliveries" class="form-control" name="date_distributed" required value="{{ $data->date_distributed }}">
                            </div> 

                            
                            <div class="col-md-12">
                                <label for="deliveries" class="form-label">Status</label>
                                <select class="form-control" name="status" required value="{{ $data->status }}">
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