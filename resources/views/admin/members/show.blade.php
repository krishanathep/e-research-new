@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Member</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Member</div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>User</td>
                            <td>{{ $members->username }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $members->prefix->prefix_name_th }} {{ $members->User_FName }} {{ $members->User_LName }}</td>
                        </tr>
                        <tr>
                            <td>Deppartment</td>
                            <td>{{ $members->department->department_name }}</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>{{ $members->position->position_name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $members->User_Email }}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{ $members->User_Mobile }}</td>
                        </tr>
                        <tr>
                            <td>Create At</td>
                            <td>{{ $members->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Update At</td>
                            <td>{{ $members->updated_at }}</td>
                        </tr>
                    </table>
                    <div class="float-right mt-2">
                        <a href="{{ route('admin-members.index') }}" class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection