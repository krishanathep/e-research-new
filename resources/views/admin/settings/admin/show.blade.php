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
                                <td>{{ $admin->admin_id }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $admin->username }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $admin->admin_name }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if ($admin->status == 1)
                                        <p class="text-success">Enable</p>
                                    @else
                                        <p class="text-danger">Disable</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $admin->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $admin->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-setting-admin.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
