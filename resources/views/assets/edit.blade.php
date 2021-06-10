@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Create Assets')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-12">
                    <h4>Edit Assets</h4>
                </div>
                <div class="col-12">
                    
                    <form class=" row g-3 " action="{{ URL::route('asset.update', ['id' => $data->id ]) }}"
                        method="post">
                        @csrf


                        <div class="col-md-12">
                            <label for="assets" class="form-label">Name</label>
                            <input type="text" id="assets" class="form-control" name="name" required value="{{ $data->name }}">
                                    
                        </div>
                        <div class="col-md-12">
                            <label for="assets" class="form-label">Description</label>
                            <input type="text" id="assets" class="form-control" name="description" required value="{{ $data->description }}">
                                    
                        </div>
                        <div class="col-md-12">
                            <label for="distribution" class="form-label">Category</label>
                            <select class="form-control" name="category" required value="{{ $data->category }}">
                                <option selected>choose....</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                </div>
                <div class="col-md-12">
                    <label for="assets" class="form-label">Supplier id</label>
                    <input type="number" id="assets" class="form-control" name="supplier_id" required value="{{ $data->supplier_id }}">
                        
                </div>
                <div class="col-md-12">
                    <label for="assets" class="form-label">Storage id</label>
                    <input type="number" id="assets" class="form-control" name="storage_id" required value="{{ $data->storage_id }}">
                        
                </div>
                <div class="col-md-12">
                    <label for="assets" class="form-label">Total Stocks</label>
                    <input type="number" id="assets" class="form-control" name="total_stocks" required value="{{ $data->total_stocks }}">
                        
                </div>






                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection