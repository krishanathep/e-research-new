@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Catgorys</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Catgorys</div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>ID</td>
                            <td>{{ $additional->shopping_add_id }}</td>
                        </tr>
                        <tr>
                            <td>Category Name Th</td>
                            <td>{{ $additional->user_id }}</td>
                        </tr>
                        <tr>
                            <td>Category Name Eng</td>
                            <td>{{ $additional->shopping_category_id }}</td>
                        </tr>
                        <tr>
                            <td>Category Detail</td>
                            <td>{{ $additional->shopping_add_name }}</td>
                        </tr>
                        <tr>
                            <td>Category Status</td>
                            <td>{{ $additional->shopping_add_details }}</td>
                        </tr>
                        <tr>
                            <td>Cratet at</td>
                            <td>{{ $additional->shopping_list_status }}</td>
                        </tr>
                        <tr>
                            <td>Update at</td>
                            <td>{{ $additional->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Update at</td>
                            <td>{{ $additional->updated_at }}</td>
                        </tr>
                    </table>
                    <div class="float-right mt-2">
                        <a href="{{ route('admin-shoppinglist-additional.index') }}" class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection