@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-black-50">View Research Type</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">View Research Type</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>ID</td>
                                <td>{{ $research->Research_types_id }}</td>
                            </tr>
                            <tr>
                                <td>Name Th</td>
                                <td>{{ $research->types_name_th }}</td>
                            </tr>
                            <tr>
                                <td>Name En</td>
                                <td>{{ $research->types_name_en }}</td>
                            </tr>
                            <tr>
                                <td>Detail</td>
                                <td>{{ $research->Research_types_detail }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                @if ($research->types_status == 1)
                                    <p class="text-success">Enable</p>
                                @else
                                    <p class="text-danger">Disable</p>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cratet at</td>
                                <td>{{ $research->updated_at }}</td>
                            </tr>
                            <tr>
                                <td>Update at</td>
                                <td>{{ $research->updated_at }}</td>
                            </tr>
                        </table>
                        <div class="float-right mt-2">
                            <a href="{{ route('admin-general-research.index') }}" class='btn btn-secondary'><i
                                    class="far fa-arrow-alt-circle-left"></i> Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
