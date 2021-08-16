@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Prefix</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Prefix</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $prefix->prefix_id }}</td>
                            </tr>
                            <tr>
                                <td>Category Name Th</td>
                                <td>{{ $prefix->prefix_name_th }}</td>
                            </tr>
                            <tr>
                                <td>Category Name Eng</td>
                                <td>{{ $prefix->prefix_name_en }}</td>
                            </tr>
                            <tr>
                                <td>Category Status</td>
                                <td>
                                    @if ($prefix->prefix_status == 1)
                                        <p class="text-success">Enable</p>
                                    @else
                                        <p class="text-danger">Disable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $prefix->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $prefix->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-general-prefix.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
