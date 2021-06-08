@php $active = 'Storages' @endphp
@extends('Layout.main')
@section('title', 'Create Storages')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Create Storage
                    </h4>
                </div>

                <div class="col-12">

                    <hr>
                </div>


                <div class="col-12">
                    <form class="row g-3">



                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="Text" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Building</label>
                            <input type="Text" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-4">
                            <label for="inputEmail4" class="form-label">Floor</label>
                            <input type="Text" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-4">
                            <label for="inputEmail4" class="form-label">Room</label>
                            <input type="number" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-4">
                            <label for="inputEmail4" class="form-label">Cabinet</label>
                            <input type="Text" class="form-control" id="inputEmail4">
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