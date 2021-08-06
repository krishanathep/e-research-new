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
                            <td>{{ $categorys->shopping_category_id }}</td>
                        </tr>
                        <tr>
                            <td>Category Name Th</td>
                            <td>{{ $categorys->shopping_category_name_th }}</td>
                        </tr>
                        <tr>
                            <td>Category Name Eng</td>
                            <td>{{ $categorys->shopping_category_name_en }}</td>
                        </tr>
                        <tr>
                            <td>Category Detail</td>
                            <td>{{ $categorys->shopping_category_details }}</td>
                        </tr>
                        <tr>
                            <td>Category Status</td>
                            <td>{{ $categorys->shopping_category_status }}</td>
                        </tr>
                        <tr>
                            <td>Cratet at</td>
                            <td>{{ $categorys->updated_at }}</td>
                        </tr>
                        <tr>
                            <td>Update at</td>
                            <td>{{ $categorys->updated_at }}</td>
                        </tr>
                    </table>
                    <div class="float-right mt-2">
                        <a href="{{ route('admin-shoppinglist-categorys.index') }}" class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection