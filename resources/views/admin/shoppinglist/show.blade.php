@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">View Shoppinglist</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Shoppinglist</div>
                    <div class="card-body">
                        {{ $shoppinglist->id }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection