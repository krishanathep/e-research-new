@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Proposal Development</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Proposal Development</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $proposaldevelopment->proposal_dev_id }}</td>
                            </tr>
                            <tr>
                                <td>Cd id</td>
                                <td>{{ $proposaldevelopment->concept_dev_id }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $proposaldevelopment->proposal_dev_name }}</td>
                            </tr>
                            <tr>
                                <td>Detail</td>
                                <td>{{ $proposaldevelopment->proposal_dev_details }}</td>
                            </tr>
                            <tr>
                                <td>Pr type</td>
                                <td>{{ $proposaldevelopment->proposal_ResearchType_id }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $proposaldevelopment->proposal_dev_type }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $proposaldevelopment->proposal_dev_status }}</td>
                            </tr>
                            <td>Create at</td>
                                <td>{{ $proposaldevelopment->created_at }}</td>
                            </tr>
                            </tr>
                            <td>Update at</td>
                                <td>{{ $proposaldevelopment->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-proposaldevelopment.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
