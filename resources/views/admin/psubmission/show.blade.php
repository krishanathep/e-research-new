@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Proposal Submission</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Proposal Submission</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $psubmission->proposal_sub_id }}</td>
                            </tr>
                            <tr>
                                <td>Approve</td>
                                <td>{{ $psubmission->proposal_dev_approve_id }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $psubmission->proposalsub_ResearchType_id }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $psubmission->proposal_sub_status }}</td>
                            </tr>
                            <td>Create at</td>
                                <td>{{ $psubmission->created_at }}</td>
                            </tr>
                            </tr>
                            <td>Update at</td>
                                <td>{{ $psubmission->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-psubmission.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection