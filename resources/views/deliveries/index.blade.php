@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'delivery')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>All Delivery</h1>
        </div>
        <div class="col-2">
            <a href="/deliveries/create" class="btn btn-success">Add New</a>
        </div>
                    <div class="col-12">
                        <form action="">
                            <input type="search" name="search" class="form-controls">
                            <input type="radio" name="by" value="distribution_id">ID
                            <button>Search</button>
                        </form>           
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
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
                                    <th>Distribution ID</th>
                                    <th>Transportation ID</th> 
                                    <th>Date Distributed</th>
                                    <th>status</th> 
                                    <th>Action</th>
                                </tr>
                                



                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->distribution_id}}</td> 
                                        <td>{{$x->transportation_id}}</td>
                                        <td>{{$x->date_distributed}}</td> 
                                        <td>{{$x->status}}</td>
                                        
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('deliveries.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('deliveries.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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