@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Shoppinglist</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Shoppinglist</div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Code</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Project name</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Research</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Head</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Budget</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Period</td>
                            <td></td>
                        </tr>
                            <td>Create date</td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="float-right mt-2">
                        <a href="{{ route('admin-shoppinglist.index') }}" class='btn btn-secondary'><i class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection