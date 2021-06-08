@php $active = 'Transportations' @endphp
@extends('Layout.main')
@section('title', 'Transportations')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Transportations
                    </h4>

                </div>

                <div class="col-2 text-end">
                    <a href="/Transportation/Create" class="btn btn-white pull-right">Create</button>
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
                                <th class="text-muted" scope="col">Plate Number</th>
                                <th class="text-muted" scope="col">Driver Name</th>
                                <th class="text-muted" scope="col">Driver Contact</th>
                                <th class="text-muted" scope="col">Notes</th>

                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection