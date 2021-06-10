@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'assets')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>All Assets</h1>
        </div>
        <div class="col-2">
            <a href="/assets/create" class="btn btn-success">Add New</a>
        </div>
                    <div class="col-12">
                    <form action="">
                            <input type="search" name="search" class="form-controls">
                            <input type="radio" name="by" value="name">Name
                            <button>Search</button>
                        </form>              
                    </div>

                   

                    <div class="col-12 mt-5">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="col-12 mt-5">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Category</th>
                                    <th>Supplier id</th> 
                                    <th>Storage id</th>
                                    <th>Total Stocks</th> 
                                    <th>Action</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->name}}</td> 
                                        <td>{{$x->description}}</td>
                                        <td>{{$x->category}}</td> 
                                        <td>{{$x->supplier_id}}</td>
                                        <td>{{$x->storage_id}}</td> 
                                        <td>{{$x->total_stocks}}</td>
                                      
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('assets.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('assets.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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
@endsection