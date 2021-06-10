@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'return')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>All Return</h1>
        </div>
        <div class="col-2">
            <a href="/return/create" class="btn btn-success">Add New</a>
        </div>
                    <div class="col-12">
                        <form action="">
                            <input type="search" name="search" class="form-controls">
                            <input type="radio" name="by" value="asset_id">Asset ID
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
                                    <th>Asset ID</th>
                                    <th>Returned By</th> 
                                    <th>Returned by Contact</th>
                                    <th>Quantity</th> 
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>                              
                           
                            </thead>
                            <tbody>
                                
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->asset_id}}</td> 
                                        <td>{{$x->returned_by}}</td>
                                        <td>{{$x->returned_by_contact}}</td> 
                                        <td>{{$x->quantity}}</td>
                                        <td>{{$x->reason}}</td>
                                        
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('return.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('return.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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