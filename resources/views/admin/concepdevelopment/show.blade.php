@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">View Concep Development</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Concep Development</div>
                    <div class="card-body">
                        <h1>{{ $concepdevelopment->id }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection