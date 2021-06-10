@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title', 'Create Supplier')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Storage</h4>
                    </div>
                    <div class="col-12">
                         
                         <form class =" row g-3 " action="{{ URL::route('storage.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Name</label>
                                <input type="text" id="storage" class="form-control" name="name" required value="{{ $data->name }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Building</label>
                                <input type="text" id="storage" class="form-control" name="building" required value="{{ $data->building }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Floor</label>
                                <input type="text" id="storage" class="form-control" name="floor" required value="{{ $data->floor }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Room</label>
                                <input type="number" id="storage" class="form-control" name="room" required value="{{ $data->room }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Cabinet</label>
                                <input type="text" id="storage" class="form-control" name="cabinet" required value="{{ $data->cabinet }}">
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
