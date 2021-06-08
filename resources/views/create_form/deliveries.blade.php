@php $active = 'Deliveries' @endphp
@extends('Layout.main')
@section('title', 'Create Deliveries')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Delivery
                    </h4>
                </div>

                <div class="col-12">

                    <hr>
                </div>


                <div class="col-12">
                    <form class="row g-3">



                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Date Distributed</label>
                            <input type="date" class="form-control" id="inputEmail4">
                        </div>
                        
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Status</label>
                            <select type="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>delivered</option>
                                <option>returned</option>

                            </select>

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