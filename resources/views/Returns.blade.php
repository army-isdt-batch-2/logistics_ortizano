@php $active = 'Returns' @endphp
@extends('Layout.main')
@section('title', 'Returns')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        All Return
                    </h4>

                </div>

                <div class="col-2 text-end">
                    <a href="/Distribution/Create" class="btn btn-white pull-right">Create</button>
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
                                <th class="text-muted" scope="col">Returned By</th>
                                <th class="text-muted" scope="col">Returned by Contact</th>
                                <th class="text-muted" scope="col">Quantity</th>
                                <th class="text-muted" scope="col">Reason</th>
                            </tr>



                        </thead>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection