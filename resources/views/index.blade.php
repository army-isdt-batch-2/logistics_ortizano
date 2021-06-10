@php $active = 'storage' @endphp
@extends('layout.main')
@section('title', 'storage')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL::asset('storage/'.Auth::user()->avatar) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <h5 class="card-title">
                        {{ Auth::user()->name }}
                    </h5>
                    
                    <p class="card-text">
                        {{ Auth::user()->email }}
                    </p>


                    <a href="{{ URL::route('app.logout')}}" class="btn btn-primary">Logout</a>
                </div>
            </div>
@endsection
