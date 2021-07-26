@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Member</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Member</div>
                    <div class="card-body">
                    <div class="float-right mb-2">
                        <a href="{{ route('admin-members.index') }}" class='btn btn-primary'>Go Home</a>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>ID</td>
                            <td>{{ $members->id }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $members->email }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>{{ $members->username }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $members->firstname }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $members->lastname }}</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>{{ $members->position }}</td>
                        </tr>
                        <tr>
                            <td>Tel</td>
                            <td>{{ $members->tel }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $members->phone }}</td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>{{ $members->type }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection