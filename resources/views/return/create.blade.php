@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'Create return')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Return</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('return.create.save') }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="return" class="form-label">Asset ID</label>
                                <input type="number" id="return" class="form-control" name="asset_id" value="{{ old('asset_id') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by:</label>
                                <input type="text" id="return" class="form-control" name="returned_by" value="{{ old('returned_by') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by Contact</label>
                                <input type="tel" id="return" class="form-control" name="returned_by_contact" value="{{ old('returned_by_contact') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="return" class="form-label">Quantity</label>
                                <input type="tel" id="return" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div> 

                            <div class="col-md-12">
                                <label for="return" class="form-label">Reason</label>
                                <input type="tel" id="return" class="form-control" name="reason" value="{{ old('reason') }}" required>
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
