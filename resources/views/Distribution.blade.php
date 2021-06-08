@php $active = 'Distributions' @endphp
@extends('Layout.main')
@section('title', 'Distributions')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Distributions
                    </h4>

                </div>

                <div class="col-2 text-end">
                    <a href="/Returns/Create" class="btn btn-white pull-right">Create</button>
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
                                <th class="text-muted" scope="col">Requestor Name</th>
                                <th class="text-muted" scope="col">Requestor Contact</th>
                                <th class="text-muted" scope="col">Quantity</th>
                                <th class="text-muted" scope="col">Status</th>
                            </tr>








                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection