@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Department</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Department</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $department->department_id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $department->department_name }}</td>
                            </tr>
                            <tr>
                                <td>Detail</td>
                                <td>{{ $department->department_details }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($department->department_status == 1)
                                        <p class="text-success">Enable</p>
                                    @else
                                        <p class="text-danger">Disable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $department->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $department->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-general-department.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
