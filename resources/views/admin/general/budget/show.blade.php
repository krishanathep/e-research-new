@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Budget Source</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Budget Source</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $budget->budget_id }}</td>
                            </tr>
                            <tr>
                                <td>Prefix</td>
                                <td>{{ $budget->budget_prefix }}</td>
                            </tr>
                            <tr>
                                <td>Name Th</td>
                                <td>{{ $budget->budget_name_TH }}</td>
                            </tr>
                            <tr>
                                <td>Name En</td>
                                <td>{{ $budget->budget_name_EN }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $budget->budget_type }}</td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $budget->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $budget->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-general-budget.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
