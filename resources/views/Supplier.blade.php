@php $active = 'Suppliers' @endphp
@extends('Layout.main')
@section('title', 'Suppliers')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Suppliers 
                        </h4>

                    </div>

                    <div class="col-2 text-end"> 
                    <a href="/Supplier/Create" class="btn btn-white pull-right">Create</button>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">#</th>
                                    <th class="text-muted" scope="col">Name</th>
                                    <th class="text-muted" scope="col">Contact</th>
                                    <th class="text-muted" scope="col">Address</th>
                                    <th class="text-muted" scope="col">Contact Person</th>
                                    <th class="text-muted" scope="col">Category</th>
                                    
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection














