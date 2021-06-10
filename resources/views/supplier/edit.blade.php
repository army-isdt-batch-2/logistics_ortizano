@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title', 'Create Supplier')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Supplier</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('supplier.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Name</label>
                                <input type="text" id="supplier" class="form-control" name="name" required value="{{ $data->name }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Contact</label>
                                <input type="number" id="supplier" class="form-control" name="contact" required value="{{ $data->contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Address</label>                           
                                <input type="text" id="supplier" class="form-control" name="address" required value="{{ $data->address }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Contact_person</label>
                                <input type="text" id="supplier" class="form-control" name="contact_person" required value="{{ $data->contact_person }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Category</label>
                                <select class="form-control" name="category" value="{{ old('category') }}" required>
                                       <option selected>choose....</option>
                                       <option>1</option>
                                       <option>2</option>
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